<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesNewsController extends Controller
{
    public function index()
    {
        // $article_blog = Article::with('categories', 'positions')->get();
        $article_blog = Article::all();

        return view('backend.article.blog.index', compact('article_blog'));
    }
}
