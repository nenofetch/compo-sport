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
        $search = $request->input('keyword');

        $articles = Article::where(function($query) use ($search) {
                                $query->where('title', 'LIKE', "%$search%")
                                ->orWhere('content', 'LIKE', "%$search%")
                                ->orWhere('created_at', 'LIKE', "%$search%");
                            })
                            ->orWhereHas('category', function ($query) use ($search) {
                                $query->where('title', 'LIKE', "%$search%")
                                ->orWhere('slug', 'LIKE', "%$search%");
                            })
                            ->orWhereHas('tagged', function ($query) use ($search) {
                                $query->where('tag_name', 'LIKE', "%$search%")
                                ->orWhere('slug', 'LIKE', "%$search%");
                            })
                            ->paginate(5);

        $categories = Category::all();

        $recentPosts = Article::latest()->take(5)->get();

        $tags = Tag::select('name', 'slug')->distinct()->get();

        return view('frontend.blog.search', compact('articles', 'categories', 'tags', 'recentPosts', 'search'));
    }

}
