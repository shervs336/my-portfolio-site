<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*
    * Insert your custom methoods here
    */
    public function image_path()
    {
        return $this->main_image ? Storage::url($this->main_image) : '';
    }

    /*
    * Insert custom scopes here
    */
    public function scopeIsPublished(Builder $query): void
    {
        $query->where('published', 1);
    }
}
