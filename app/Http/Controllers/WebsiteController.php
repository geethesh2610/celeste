<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class WebsiteController extends Controller
{
    public function index()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        $blogs = Blog::latest()->take(3)->get();

        return view('welcome', compact('blogs'));
    }

    public function about()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        return view('about');
    }

    public function plotCategoryPage($categorySlug)
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        $validSlugs = [
            'residential',
            'commercial',
            'industrial-projects',
            'offplan-projects',
        ];

        if (! in_array($categorySlug, $validSlugs)) {
            abort(404);
        }

        $plots = \App\Models\Plot::with('media')
            ->where('category', $categorySlug)
            ->latest()
            ->get();

        return view('plots.index', [
            'slug' => $categorySlug,
            'plots' => $plots,
        ]);
    }

    public function plotDetailsPage($categorySlug, $plotSlug)
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        $plot = \App\Models\Plot::where('category', $categorySlug)
            ->where('slug', $plotSlug)
            ->firstOrFail();

        $featuredImage = $plot->getFirstMediaUrl('featured_image');

        $galleryImages = $plot->getMedia('image_gallery');

        return view('plots.details', [
            'plot' => $plot,
            'featuredImage' => $featuredImage,
            'galleryImages' => $galleryImages,
        ]);
    }

    public function services()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        return view('services.index');
    }

    public function residentialServices()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        return view('services.residential');
    }

    public function commercialServices()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        return view('services.commercial');
    }

    public function industrialServices()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        return view('services.industrial');
    }

    public function blogs()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );
        $blogs = Blog::latest()->get();

        return view('blogs.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blogs.details', compact('blog'));
    }

    public function contact()
    {
        seo()
            ->title('Celeste Land Deals')
            ->description('Theres really a lot of great stuff in here...')
            ->images(asset('assets/images/meta.png')
            );

        return view('contact');
    }
}
