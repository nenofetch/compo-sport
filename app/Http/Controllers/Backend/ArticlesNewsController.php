<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticlesNewsController extends Controller
{
    public function index()
    {
        $articles_news = Article::where('slug', 'berita')->get();

        return view('backend.article.news.index', compact('articles_news'));
    }

    // public function create()
    // {
    //     $categories = Category::all();

    //     return view('backend.article.news.add', compact('categories'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required|mimes:jpg,png,jpeg|image|max:2048',
    //         'title' => 'required',
    //         'content' => 'required',
    //         'category_id' => 'required',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('public/article');
    //         $imageName = basename($imagePath);
    //     } else {
    //         $imageName = '';
    //     }

    //     Article::create([
    //         'image' => $imageName,
    //         'title' => $request->title,
    //         'slug' => Str::slug($request->title, '-'),
    //         'content' => $request->content,
    //         'user_id' => Auth::user()->id,
    //         'category_id' => $request->category_id,
    //         'position_id' => 1,
    //         'status' => $request->status
    //     ]);

    //     return redirect('articles_news')->with('message', 'Data berhasil ditambahkan!');
    // }

    public function show($id)
    {
        $articles_news = Article::find($id);

        return view('backend.article.news.detail', compact('articles_news'));
    }

    public function edit($id)
    {
        $articles_news = Article::find($id);
        $categories = Category::all();

        return view('backend.article.news.edit', compact('articles_news', 'categories'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $articles_news = Article::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/article/' .$articles_news->image);
            $imagePath = $request->file('image')->store('public/article');
            $imageName = basename($imagePath);
        } else {
            $imageName = $articles_news->image;
        }

        $articles_news->update([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'category_id' => $request->category_id,
            'status' => $request->status
        ]);

        return redirect('articles_news')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $articles_news = Article::find($id);
        if ($articles_news->image) {
            Storage::delete('public/article/' .$articles_news->image);
        }

        $articles_news->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
