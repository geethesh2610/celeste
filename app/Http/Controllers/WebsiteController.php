<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class WebsiteController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->take(3)->get();

        return view('welcome', compact('blogs'));
    }

    public function about()
    {
        return view('about');
    }

    public function plotCategoryPage($categorySlug)
    {
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
        return view('services.index');
    }

    public function residentialServices()
    {
        return view('services.residential');
    }

    public function commercialServices()
    {
        return view('services.commercial');
    }

    public function industrialServices()
    {
        return view('services.industrial');
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();

        return view('blogs.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blogs.details', compact('blog'));
    }

    public function contact()
    {
        return view('contact');
    }
}
