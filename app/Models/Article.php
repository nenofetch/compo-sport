<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Conner\Tagging\Taggable;

class Article extends Model
{
    use HasFactory, Taggable;
    public $fillable = ['image', 'title', 'content', 'slug', 'viewers', 'user_id', 'category_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
