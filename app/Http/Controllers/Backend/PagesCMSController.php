<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesCMSController extends Controller
{
    public function index()
    {
        $pages_cms = Page::where('position_id', 1)->get();

        return view('backend.pages.cms.index', compact('pages_cms'));
    }

    public function create()
    {
        return view('backend.pages.cms.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/pages/cms');
            $imageName = basename($imagePath);
        } else {
            $imageName = '';
        }

        Page::create([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'position_id' => 1,
        ]);

        return redirect('pages_cms')->with('message', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pages_cms = Page::find($id);

        return view('backend.pages.cms.detail', compact('pages_cms'));
    }

    public function edit($id)
    {
        $pages_cms = Page::find($id);

        return view('backend.pages.cms.edit', compact('pages_cms'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        $pages_cms = Page::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/pages/cms/' . $pages_cms->image);
            $imagePath = $request->file('image')->store('public/pages/cms');
            $imageName = basename($imagePath);
        } else {
            $imageName = $pages_cms->image;
        }

        $pages_cms->update([
            'image' => $imageName,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
        ]);

        return redirect('pages_cms')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $pages_cms = Page::find($id);
        if ($pages_cms->image) {
            Storage::delete('public/pages/cms/' . $pages_cms->image);
        }

        $pages_cms->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
