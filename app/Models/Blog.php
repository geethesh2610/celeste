<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'status',
        'is_featured',
        'published_at',
        'author_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile()
            ->useDisk('public')
            ->withResponsiveImages();
    }

    // public function getPreviewUrl(): string
    // {
    //     return route('blog.show', $this->slug);
    // }
}
