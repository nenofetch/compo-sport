<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WriteArticlesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('backend.article.write.index', compact('categories'));
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
            $imagePath = $request->file('image')->store('public/article');
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
            'status' => $request->status
        ]);

        $categories = Category::whereId($request->category_id)->first();
        if ($categories->slug == 'berita') {
            return redirect('articles_news')->with('message', 'Data berhasil ditambahkan!');
        } else {
            return redirect('articles_blog')->with('message', 'Data berhasil ditambahkan!');
        }

    }
}
