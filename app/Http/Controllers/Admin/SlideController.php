<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order')->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.form', ['slide' => new Slide()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_bn' => 'nullable|string|max:255',
            'title_cn' => 'nullable|string|max:255',
            'image'    => 'required|image|max:5120',
            'is_active' => 'boolean',
            'order'    => 'integer',
        ]);

        $data['image'] = $request->file('image')->store('slides', 'public');
        $data['is_active'] = $request->boolean('is_active');

        Slide::create($data);

        return redirect()->route('admin.slides.index')->with('success', 'Slide created.');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.form', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $data = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_bn' => 'nullable|string|max:255',
            'title_cn' => 'nullable|string|max:255',
            'image'    => 'nullable|image|max:5120',
            'is_active' => 'boolean',
            'order'    => 'integer',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slide->image);
            $data['image'] = $request->file('image')->store('slides', 'public');
        } else {
            unset($data['image']);
        }

        $data['is_active'] = $request->boolean('is_active');
        $slide->update($data);

        return redirect()->route('admin.slides.index')->with('success', 'Slide updated.');
    }

    public function destroy(Slide $slide)
    {
        Storage::disk('public')->delete($slide->image);
        $slide->delete();

        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted.');
    }
}
