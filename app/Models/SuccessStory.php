<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SuccessStory extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['image_name'];

    public function registerMediaColections()
    {
        $this->addMediaCollection('success_story')->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb-sm')->width(60);
        $this->addMediaConversion('thumb')->width(265)->height(400);
        $this->addMediaConversion('actual')->width(200)->height(302);
    }

    public function getStatusAttribute()
    {
        return $this->visible_status == 1 ? '<i class="bi bi-check-circle"></i>' : '<i class="bi bi-x-circle"></i>';
    }
}
