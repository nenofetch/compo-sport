<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();

        return view('backend.facility.index', compact('facilities'));
    }

    public function create()
    {
        return view('backend.facility.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|image|max:2048',
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/facility');
            $imageName = basename($imagePath);
        } else {
            $imageName = '';
        }

        Facility::create([
            'image' => $imageName,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);

        return redirect('facility')->with('message', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $facilities = Facility::find($id);

        return view('backend.facility.detail', compact('facilities'));
    }

    public function edit($id)
    {
        $facilities = Facility::find($id);

        return view('backend.facility.edit', compact('facilities'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'name' => 'required',
            'description' => 'required',
        ]);

        $facilities = Facility::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/facility/' . $facilities->image);
            $imagePath = $request->file('image')->store('public/facility');
            $imageName = basename($imagePath);
        } else {
            $imageName = $facilities->image;
        }

        $facilities->update([
            'image' => $imageName,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);

        return redirect('facility')->with('message', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $facilities = Facility::find($id);
        if ($facilities->image) {
            Storage::delete('public/facility/' . $facilities->image);
        }

        $facilities->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
