<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('order')->get();
        return view('admin.photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.form', ['photo' => new Photo()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en'  => 'nullable|string|max:255',
            'title_bn'  => 'nullable|string|max:255',
            'title_cn'  => 'nullable|string|max:255',
            'image'     => 'required|image|max:5120',
            'is_active' => 'boolean',
            'order'     => 'integer',
        ]);

        $data['image'] = $request->file('image')->store('gallery', 'public');
        $data['is_active'] = $request->boolean('is_active');

        Photo::create($data);

        return redirect()->route('admin.photos.index')->with('success', 'Photo added.');
    }

    public function edit(Photo $photo)
    {
        return view('admin.photos.form', compact('photo'));
    }

    public function update(Request $request, Photo $photo)
    {
        $data = $request->validate([
            'title_en'  => 'nullable|string|max:255',
            'title_bn'  => 'nullable|string|max:255',
            'title_cn'  => 'nullable|string|max:255',
            'image'     => 'nullable|image|max:5120',
            'is_active' => 'boolean',
            'order'     => 'integer',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($photo->image);
            $data['image'] = $request->file('image')->store('gallery', 'public');
        } else {
            unset($data['image']);
        }

        $data['is_active'] = $request->boolean('is_active');
        $photo->update($data);

        return redirect()->route('admin.photos.index')->with('success', 'Photo updated.');
    }

    public function destroy(Photo $photo)
    {
        Storage::disk('public')->delete($photo->image);
        $photo->delete();

        return redirect()->route('admin.photos.index')->with('success', 'Photo deleted.');
    }
}
