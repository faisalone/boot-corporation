<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('children')->topLevel()->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $parents = Menu::topLevel()->get();
        return view('admin.menus.form', ['menu' => new Menu(), 'parents' => $parents]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'parent_id'  => 'nullable|exists:menus,id',
            'title_en'   => 'required|string|max:255',
            'title_bn'   => 'nullable|string|max:255',
            'title_cn'   => 'nullable|string|max:255',
            'url'        => 'nullable|string|max:500',
            'route_name' => 'nullable|string|max:255',
            'target'     => 'in:_self,_blank',
            'icon'       => 'nullable|string|max:255',
            'is_active'  => 'boolean',
            'order'      => 'integer',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        Menu::create($data);

        return redirect()->route('admin.menus.index')->with('success', 'Menu item created.');
    }

    public function edit(Menu $menu)
    {
        $parents = Menu::topLevel()->where('id', '!=', $menu->id)->get();
        return view('admin.menus.form', compact('menu', 'parents'));
    }

    public function update(Request $request, Menu $menu)
    {
        $data = $request->validate([
            'parent_id'  => 'nullable|exists:menus,id',
            'title_en'   => 'required|string|max:255',
            'title_bn'   => 'nullable|string|max:255',
            'title_cn'   => 'nullable|string|max:255',
            'url'        => 'nullable|string|max:500',
            'route_name' => 'nullable|string|max:255',
            'target'     => 'in:_self,_blank',
            'icon'       => 'nullable|string|max:255',
            'is_active'  => 'boolean',
            'order'      => 'integer',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        $menu->update($data);

        return redirect()->route('admin.menus.index')->with('success', 'Menu item updated.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Menu item deleted.');
    }
}
