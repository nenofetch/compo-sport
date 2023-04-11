<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Conner\Tagging\Model\Tag;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $recentPosts = Article::latest()->take(5)->get();
        $tags = Tag::pluck('name')->unique()->toArray();
        return view('frontend.blog', compact('articles', 'categories', 'recentPosts', 'tags'));
    }

    public function single($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $recentPosts = Article::latest()->take(5)->get();
        $tags = Tag::pluck('name')->unique()->toArray();
        return view('frontend.blog-single', compact('article', 'categories', 'recentPosts', 'tags'));
    }
}
