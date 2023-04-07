<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategories extends Model
{
    use HasFactory;
    public $fillable = ['title', 'slug'];

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
