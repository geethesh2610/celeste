<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Plot extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'price',
        'plot_size',
        'zoning',
        'category',
        'features_tag',
        'description',
        'property_detail',
        'location',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile()
            ->useDisk('public')
            ->withResponsiveImages();

        $this->addMediaCollection('image_gallery')
            ->useDisk('public')
            ->withResponsiveImages();
    }

    protected $casts = [
        'features_tag' => 'array',
    ];
}
