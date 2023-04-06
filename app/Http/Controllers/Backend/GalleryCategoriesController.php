<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\GalleryCategories;

class GalleryCategoriesController extends Controller
{
    public function index()
    {
        $gallery_categories = GalleryCategories::all();

        return view('backend.gallery.category.index', compact('gallery_categories'));
    }

    public function store(Request $request)
    {
        GalleryCategories::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title, '-')
        ]);

        return redirect()->back()->with('message', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $gallery_categories= GalleryCategories::find($id);

        $gallery_categories->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title, '-')
        ]);

        return redirect()->back()->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $gallery_categories = GalleryCategories::find($id);
        $gallery_categories->delete();

        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}
