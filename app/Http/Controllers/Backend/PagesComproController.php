<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesComproController extends Controller
{
    public function index()
    {
        $pages_compro = Page::where('position_id', 2)->get();

        return view('backend.pages.compro.index', compact('pages_compro'));
    }

    public function create()
    {
        return view('backend.pages.compro.add');
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
            'position_id' => 2,
        ]);

        return redirect('pages_compro')->with('message', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pages_compro = Page::find($id);

        return view('backend.pages.compro.detail', compact('pages_compro'));
    }

    public function edit($id)
    {
        $pages_compro = Page::find($id);

        return view('backend.pages.compro.edit', compact('pages_compro'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        $pages_compro = Page::find($id);

        if ($request->hasFile('image')) {
            Storage::delete($pages_compro->image);
            $imagePath = $request->file('image')->store('public/pages');
            $imageName = basename($imagePath);
        } else {
            $imageName = $pages_compro->image;
        }

        $pages_compro->update([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
        ]);

        return redirect('pages_compro')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $pages_compro = Page::find($id);
        if ($pages_compro->image) {
            Storage::delete($pages_compro->image);
        }

        $pages_compro->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
