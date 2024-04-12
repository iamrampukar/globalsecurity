<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getStatusAttribute()
    {
        return $this->visible_status == 1 ? '<i class="bi bi-check-circle"></i>' : '<i class="bi bi-x-circle"></i>';
    }
}
