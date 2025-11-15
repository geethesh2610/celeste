import { gsap } from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".header");
    const logo = document.querySelector(".header-logo");
    const logoDark = logo.dataset.logoDark;
    const logoLight = logo.dataset.logoLight;
    const links = document.querySelectorAll(".header-links a");
    const nav = document.querySelector(".header-nav");
    const bgSections = document.querySelectorAll(".has-background");

    function checkHeaderBackground() {
        let isOverBgSection = false;
        const headerRect = header.getBoundingClientRect();
        const headerCenterY = headerRect.top + headerRect.height / 2;

        bgSections.forEach((section) => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= headerCenterY && rect.bottom >= headerCenterY) {
                isOverBgSection = true;
            }
        });

        if (isOverBgSection) {
            logo.src = logoDark;
            // header.classList.remove("glass-nav");
            header.classList.remove("on-light");
            nav.classList.remove("bg-[#ECECEC]");
            nav.classList.add("bg-[#E4E4E424]");
            links.forEach((link) => (link.style.color = "white"));
        } else {
            // Header is over light background → use colored logo + dark text
            logo.src = logoLight;
            header.classList.add("glass-nav");
            header.classList.add("on-light");
            nav.classList.remove("bg-[#E4E4E424]");
            nav.classList.add("bg-[#ECECEC]");
            links.forEach((link) => (link.style.color = "#1D1D1D"));
        }
    }

    window.addEventListener("scroll", checkHeaderBackground);
    window.addEventListener("resize", checkHeaderBackground);
    checkHeaderBackground();

    // ===============================================
    // GSAP Animations
    // ===============================================
    (function () {
        const nav = document.querySelector(".glass-nav");
        if (!nav) return;

        function createDisplacementMap() {
            const rect = nav.getBoundingClientRect();
            const width = rect.width;
            const height = rect.height;
            const radius = 16;
            const border = 0.15;
            const borderWidth = Math.min(width, height) * (border * 0.5);

            const svg = `
        <svg viewBox="0 0 ${width} ${height}" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="red-grad" x1="100%" y1="0%" x2="0%" y2="0%">
                    <stop offset="0%" stop-color="#000"/>
                    <stop offset="100%" stop-color="red"/>
                </linearGradient>
                <linearGradient id="blue-grad" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#000"/>
                    <stop offset="100%" stop-color="blue"/>
                </linearGradient>
            </defs>
            <rect x="0" y="0" width="${width}" height="${height}" fill="black"></rect>
            <rect x="0" y="0" width="${width}" height="${height}" rx="${radius}" fill="url(#red-grad)" />
            <rect x="0" y="0" width="${width}" height="${height}" rx="${radius}" fill="url(#blue-grad)" style="mix-blend-mode: difference" />
            <rect x="${borderWidth}" y="${borderWidth}" width="${
                width - borderWidth * 2
            }" height="${
                height - borderWidth * 2
            }" rx="${radius}" fill="hsl(0 0% 60% / 0.95)" style="filter:blur(5px)" />
        </svg>
        `;

            const encoded = encodeURIComponent(svg);
            const dataUri = `data:image/svg+xml,${encoded}`;

            document
                .getElementById("displacement-map")
                .setAttribute("href", dataUri);
        }

        function checkPosition() {
            // Find sections where glass should NOT be active
            const noGlassSections = document.querySelectorAll(
                "[data-no-glass-active]"
            );

            const headerRect = nav.getBoundingClientRect();
            let isOverNoGlassSection = false;

            noGlassSections.forEach((section) => {
                const sectionRect = section.getBoundingClientRect();

                // Check if header overlaps with the section
                if (
                    headerRect.bottom > sectionRect.top &&
                    headerRect.top < sectionRect.bottom
                ) {
                    isOverNoGlassSection = true;
                }
            });

            // Remove glass effect when over no-glass sections
            if (isOverNoGlassSection) {
                nav.classList.remove("glass-active");
            } else {
                nav.classList.add("glass-active");
            }
        }

        createDisplacementMap();
        checkPosition();

        // Check on scroll
        window.addEventListener("scroll", checkPosition);

        // Update displacement map on resize
        let resizeTimeout;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                createDisplacementMap();
                checkPosition();
            }, 150);
        });
    })();

    // ===============================================
    // GSAP Animations
    // ===============================================

    ScrollSmoother.create({
        smooth: 1,
        effects: true,
        smoothTouch: 0.1,
    });

    // ===============================================
    // Home page animations
    // ===============================================
    const heading = document.querySelector(".hero-heading");
    const card = document.querySelector(".hero-white-card");
    const section = document.querySelector(".hero-section");
    const offerings = document.querySelector(".hero-offerings");

    if (heading && card && section) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top top",
                end: "bottom top",
                scrub: true,
            },
        });

        tl.to(heading, { y: 100, ease: "none" }, 0)
            .to(card, { y: 80, ease: "none" }, 0)
            .to(offerings, { y: -40, ease: "none" }, 0);
    }

    const container = document.querySelector(".about-card-container");
    const col1 = document.querySelector(".about-card-column-1");
    const col2 = document.querySelector(".about-card-column-2");
    const col3 = document.querySelector(".about-card-column-3");

    if (container && col1 && col2 && col3) {
        gsap.fromTo(
            col1,
            { y: -40 },
            {
                y: 40,
                scrollTrigger: {
                    trigger: container,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true,
                },
            }
        );

        gsap.fromTo(
            col2,
            { y: 40 },
            {
                y: -40,
                scrollTrigger: {
                    trigger: container,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true,
                },
            }
        );

        gsap.fromTo(
            col3,
            { y: -40 },
            {
                y: 40,
                scrollTrigger: {
                    trigger: container,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true,
                },
            }
        );
    }
});
