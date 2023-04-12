<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Conner\Tagging\Model\Tag;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        return view('frontend.blog.index', compact('articles', 'categories', 'recentPosts', 'tags'));
    }

    public function single($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        $article->update([
            'viewers' => $article->viewers + 1,
        ]);

        return view('frontend.blog.single', compact('article', 'categories', 'recentPosts', 'tags'));
    }

    public function author($id)
    {
        $articles = Article::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        $author = User::findOrFail($id);

        $hashedId = Hash::make($author->$id);

        return view('frontend.blog.author', compact('articles', 'categories', 'recentPosts', 'tags', 'author', 'hashedId'));
    }

    public function date($date)
    {
        $articles = Article::whereDate('created_at', $date)->orderBy('created_at', 'desc')->paginate(5);

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        return view('frontend.blog.date', compact('articles', 'categories', 'recentPosts', 'tags', 'date'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $articles = $category->article()->orderBy('created_at', 'desc')->paginate(5);

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        return view('frontend.blog.category', compact('articles', 'categories', 'recentPosts', 'tags', 'category'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        $articles = Article::withAnyTag([$slug])->paginate(5);

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        return view('frontend.blog.tag', compact('articles', 'categories', 'recentPosts', 'tags', 'tag'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $articles = Article::where('title', 'LIKE', "%$query%")
                            ->orWhere('body', 'LIKE', "%$query%")
                            ->get();

        $categories = Category::where('name', 'LIKE', "%$query%")
                              ->orWhere('slug', 'LIKE', "%$query%")
                              ->get();

        $tags = Tag::where('name', 'LIKE', "%$query%")
                   ->orWhere('slug', 'LIKE', "%$query%")
                   ->get();

        return view('frontend.blog.search', compact('articles', 'categories', 'tags', 'query'));
    }

}
