<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryCategories;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return view('backend.gallery.image.index', compact('galleries'));
    }

    public function create()
    {
        $gallery_categories = GalleryCategories::all();

        return view('backend.gallery.image.add', compact('gallery_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'gallery_categories_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/gallery');
            $imageName = basename($imagePath);
        } else {
            $imageName = '';
        }

        Gallery::create([
            'image' => $imageName,
            'title' => $request->title,
            'gallery_categories_id' => $request->gallery_categories_id,
        ]);

        return redirect('gallery_images')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galleries = Gallery::find($id);
        $gallery_categories = GalleryCategories::all();

        return view('backend.gallery.image.edit', compact('galleries', 'gallery_categories'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'gallery_categories_id' => 'required',
        ]);

        $galleries = Gallery::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/gallery/' . $galleries->image);
            $imagePath = $request->file('image')->store('public/gallery');
            $imageName = basename($imagePath);
        } else {
            $imageName = $galleries->image;
        }

        $galleries->update([
            'image' => $imageName,
            'title' => $request->title,
            'gallery_categories_id' => $request->gallery_categories_id,
        ]);

        return redirect('gallery_images')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $galleries = Gallery::find($id);
        if ($galleries->image) {
            Storage::delete('public/gallery/' . $galleries->image);
        }

        $galleries->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
