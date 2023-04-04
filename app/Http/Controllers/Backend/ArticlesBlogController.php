<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/blogs');
            $imageName = basename($imagePath);
        } else {
            $imageName = '';
        }

        Article::create([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'position_id' => 2,
            'status' => $request->status
        ]);

        return redirect('articles_blog')->with('message', 'Data berhasil ditambahkan!');
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
