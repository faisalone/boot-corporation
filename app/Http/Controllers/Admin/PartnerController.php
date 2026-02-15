<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('order')->get();
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.form', ['partner' => new Partner()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_en'        => 'required|string|max:255',
            'name_bn'        => 'nullable|string|max:255',
            'name_cn'        => 'nullable|string|max:255',
            'designation_en' => 'nullable|string|max:255',
            'designation_bn' => 'nullable|string|max:255',
            'designation_cn' => 'nullable|string|max:255',
            'credentials'    => 'nullable|string|max:500',
            'email'          => 'nullable|email|max:255',
            'linkedin'       => 'nullable|url|max:255',
            'photo'          => 'nullable|image|max:5120',
            'bio_en'         => 'nullable|string',
            'bio_bn'         => 'nullable|string',
            'bio_cn'         => 'nullable|string',
            'is_active'      => 'boolean',
            'order'          => 'integer',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('partners', 'public');
        }

        Partner::create($data);

        return redirect()->route('admin.partners.index')->with('success', 'Partner created.');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.form', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $data = $request->validate([
            'name_en'        => 'required|string|max:255',
            'name_bn'        => 'nullable|string|max:255',
            'name_cn'        => 'nullable|string|max:255',
            'designation_en' => 'nullable|string|max:255',
            'designation_bn' => 'nullable|string|max:255',
            'designation_cn' => 'nullable|string|max:255',
            'credentials'    => 'nullable|string|max:500',
            'email'          => 'nullable|email|max:255',
            'linkedin'       => 'nullable|url|max:255',
            'photo'          => 'nullable|image|max:5120',
            'bio_en'         => 'nullable|string',
            'bio_bn'         => 'nullable|string',
            'bio_cn'         => 'nullable|string',
            'is_active'      => 'boolean',
            'order'          => 'integer',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('photo')) {
            if ($partner->photo) Storage::disk('public')->delete($partner->photo);
            $data['photo'] = $request->file('photo')->store('partners', 'public');
        } else {
            unset($data['photo']);
        }

        $partner->update($data);

        return redirect()->route('admin.partners.index')->with('success', 'Partner updated.');
    }

    public function destroy(Partner $partner)
    {
        if ($partner->photo) Storage::disk('public')->delete($partner->photo);
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner deleted.');
    }
}
