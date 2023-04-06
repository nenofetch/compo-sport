<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $fillable = ['title', 'image', 'gallery_categories_id'];

    public function galleryCategories()
    {
        return $this->belongsTo(GalleryCategories::class);
    }
}
