<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('backend.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title, '-')
        ]);

        // Alert::success('Success', 'Kategori berhasil ditambahkan!');
        // return redirect('kategori');
    }

    public function update(Request $request,$id)
    {
        $category = Category::find($id);

        $category->update([
            'title' => $request->name,
            'slug'  => Str::slug($request->title, '-')
        ]);

        Alert::success('Success', 'Kategori berhasil diubah!');
        return redirect('kategori');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
