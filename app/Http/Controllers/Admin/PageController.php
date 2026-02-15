<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('order')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.form', ['page' => new Page()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en'   => 'required|string|max:255',
            'title_bn'   => 'nullable|string|max:255',
            'title_cn'   => 'nullable|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:pages,slug',
            'summary_en' => 'nullable|string',
            'summary_bn' => 'nullable|string',
            'summary_cn' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_bn' => 'nullable|string',
            'content_cn' => 'nullable|string',
            'image'      => 'nullable|image|max:5120',
            'is_active'  => 'boolean',
            'order'      => 'integer',
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title_en']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('pages', 'public');
        }

        Page::create($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page created.');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.form', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title_en'   => 'required|string|max:255',
            'title_bn'   => 'nullable|string|max:255',
            'title_cn'   => 'nullable|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:pages,slug,' . $page->id,
            'summary_en' => 'nullable|string',
            'summary_bn' => 'nullable|string',
            'summary_cn' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_bn' => 'nullable|string',
            'content_cn' => 'nullable|string',
            'image'      => 'nullable|image|max:5120',
            'is_active'  => 'boolean',
            'order'      => 'integer',
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title_en']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($page->image) Storage::disk('public')->delete($page->image);
            $data['image'] = $request->file('image')->store('pages', 'public');
        } else {
            unset($data['image']);
        }

        $page->update($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated.');
    }

    public function destroy(Page $page)
    {
        if ($page->image) Storage::disk('public')->delete($page->image);
        $page->delete();

        return redirect()->route('admin.pages.index')->with('success', 'Page deleted.');
    }
}
