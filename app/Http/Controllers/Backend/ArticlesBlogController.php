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
        $categories = Category::where('slug', 'berita')->first();
        $articles_blog = Article::whereNotIn('category_id', [$categories->id])->get();

        return view('backend.article.blog.index', compact('articles_blog'));
    }

    public function show($id)
    {
        $articles_blog = Article::find($id);

        return view('backend.article.blog.detail', compact('articles_blog'));
    }

    public function edit($id)
    {
        $articles_blog = Article::find($id);
        $categories = Category::all();

        return view('backend.article.blog.edit', compact('articles_blog', 'categories'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $articles_blog = Article::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/article/' . $articles_blog->image);
            $imagePath = $request->file('image')->store('public/article');
            $imageName = basename($imagePath);
        } else {
            $imageName = $articles_blog->image;
        }

        $articles_blog->update([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'category_id' => $request->category_id,
            'status' => $request->status
        ]);

        return redirect('articles_blog')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $articles_blog = Article::find($id);
        if ($articles_blog->image) {
            Storage::delete('public/article/' . $articles_blog->image);
        }

        $articles_blog->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
