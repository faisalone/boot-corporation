<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('order')->get();
        return view('admin.publications.index', compact('publications'));
    }

    public function create()
    {
        return view('admin.publications.form', ['publication' => new Publication()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en'     => 'required|string|max:255',
            'title_bn'     => 'nullable|string|max:255',
            'title_cn'     => 'nullable|string|max:255',
            'summary_en'   => 'nullable|string',
            'summary_bn'   => 'nullable|string',
            'summary_cn'   => 'nullable|string',
            'category'     => 'nullable|string|max:100',
            'file'         => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'published_at' => 'nullable|date',
            'is_active'    => 'boolean',
            'order'        => 'integer',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('publications', 'public');
        }

        Publication::create($data);

        return redirect()->route('admin.publications.index')->with('success', 'Publication created.');
    }

    public function edit(Publication $publication)
    {
        return view('admin.publications.form', compact('publication'));
    }

    public function update(Request $request, Publication $publication)
    {
        $data = $request->validate([
            'title_en'     => 'required|string|max:255',
            'title_bn'     => 'nullable|string|max:255',
            'title_cn'     => 'nullable|string|max:255',
            'summary_en'   => 'nullable|string',
            'summary_bn'   => 'nullable|string',
            'summary_cn'   => 'nullable|string',
            'category'     => 'nullable|string|max:100',
            'file'         => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'published_at' => 'nullable|date',
            'is_active'    => 'boolean',
            'order'        => 'integer',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('file')) {
            if ($publication->file) Storage::disk('public')->delete($publication->file);
            $data['file'] = $request->file('file')->store('publications', 'public');
        } else {
            unset($data['file']);
        }

        $publication->update($data);

        return redirect()->route('admin.publications.index')->with('success', 'Publication updated.');
    }

    public function destroy(Publication $publication)
    {
        if ($publication->file) Storage::disk('public')->delete($publication->file);
        $publication->delete();

        return redirect()->route('admin.publications.index')->with('success', 'Publication deleted.');
    }
}
