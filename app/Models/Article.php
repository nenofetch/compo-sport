<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $fillable = ['image', 'title', 'slug', 'user_id', 'category_id', 'position_id'];
}
