<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class LeadCapture extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'is_published',
        'price',
        'excerpt',
        'landmark',
    ];

    public function leadForms()
    {
        return $this->hasMany(LeadCaptureForm::class);
    }

    public function unreadLeadForms()
    {
        return $this->hasMany(LeadCaptureForm::class)
            ->whereNull('read_at');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('lead_image')
            ->singleFile()
            ->useDisk('public')
            ->withResponsiveImages();

        $this->addMediaCollection('lead_image_mobile')
            ->singleFile()
            ->useDisk('public')
            ->withResponsiveImages();
    }
}
