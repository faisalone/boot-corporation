<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.form', ['service' => new Service()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en'   => 'required|string|max:255',
            'title_bn'   => 'nullable|string|max:255',
            'title_cn'   => 'nullable|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:services,slug',
            'summary_en' => 'nullable|string',
            'summary_bn' => 'nullable|string',
            'summary_cn' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_bn' => 'nullable|string',
            'content_cn' => 'nullable|string',
            'icon'       => 'nullable|string|max:255',
            'image'      => 'nullable|image|max:5120',
            'is_active'  => 'boolean',
            'order'      => 'integer',
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title_en']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Service created.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title_en'   => 'required|string|max:255',
            'title_bn'   => 'nullable|string|max:255',
            'title_cn'   => 'nullable|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:services,slug,' . $service->id,
            'summary_en' => 'nullable|string',
            'summary_bn' => 'nullable|string',
            'summary_cn' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_bn' => 'nullable|string',
            'content_cn' => 'nullable|string',
            'icon'       => 'nullable|string|max:255',
            'image'      => 'nullable|image|max:5120',
            'is_active'  => 'boolean',
            'order'      => 'integer',
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title_en']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($service->image) Storage::disk('public')->delete($service->image);
            $data['image'] = $request->file('image')->store('services', 'public');
        } else {
            unset($data['image']);
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) Storage::disk('public')->delete($service->image);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted.');
    }
}
