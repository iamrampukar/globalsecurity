<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Testimonial extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['image_name'];

    public function registerMediaColections()
    {
        $this->addMediaCollection('testimonial_image')->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb-sm')->width(60);
        $this->addMediaConversion('thumb')->width(300)->height(300);
        $this->addMediaConversion('actual')->width(500)->height(500);
    }

    public function getStatusAttribute()
    {
        return $this->visible_status == 1 ? '<i class="bi bi-check-circle"></i>' : '<i class="bi bi-x-circle"></i>';
    }
}
