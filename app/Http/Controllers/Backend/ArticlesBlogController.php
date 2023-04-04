<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticlesBlogController extends Controller
{
    public function index()
    {
        // $articles_blog = Article::with('categories', 'positions')->get();
        $articles_blog = Article::all();

        return view('backend.article.blog.index', compact('articles_blog'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.article.blog.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->hashFile('image')) {
            $path = $request->file('image')->store('uploads/blogs');
        } else {
            $path = '';
        }

        Article::create([
            'image' => $path,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'position_id' => 2,
            'status' => $request->status        ]);

        return redirect()->route('articles_blog.index')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request,$id)
    {
        // return $request->all();
    }

    public function destroy($id)
    {
        //
    }
}
