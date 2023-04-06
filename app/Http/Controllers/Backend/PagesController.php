<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('backend.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.pages.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/pages');
            $imageName = basename($imagePath);
        } else {
            $imageName = '';
        }

        Page::create([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
        ]);

        return redirect('pages')->with('message', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pages = Page::find($id);

        return view('backend.pages.detail', compact('pages'));
    }

    public function edit($id)
    {
        $pages = Page::find($id);

        return view('backend.pages.edit', compact('pages'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        $pages = Page::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/pages/' . $pages->image);
            $imagePath = $request->file('image')->store('public/pages');
            $imageName = basename($imagePath);
        } else {
            $imageName = $pages->image;
        }

        $pages->update([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
        ]);

        return redirect('pages')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $pages = Page::find($id);
        if ($pages->image) {
            Storage::delete('public/pages/' . $pages->image);
        }

        $pages->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
