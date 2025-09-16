<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Admin;

class MenuController extends Controller
{
    public function index()
{
    $menus = Menu::all();
    return view('admin.home.menu', compact('menus'));
}

public function create()
{
    return view('admin.home.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama_menu' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    $menu = new Menu();
    $menu->nama_menu = $request->nama_menu;
    $menu->harga = $request->harga;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $path = $file->store('menu', 'public');
        $menu->gambar = $path;
    }

    $menu->save();

    return redirect()->route('admin.home.menu')->with('success', 'Menu berhasil ditambahkan.');
}

public function edit(Menu $menu)
{
    return view('admin.home.edit', compact('menu'));
}

public function update(Request $request, Menu $menu)
{
    $request->validate([
        'nama_menu' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    $menu->nama_menu = $request->nama_menu;
    $menu->harga = $request->harga;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $path = $file->store('menu', 'public');
        $menu->gambar = $path;
    }

    $menu->save();

    return redirect()->route('admin.home.menu')->with('success', 'Menu berhasil diupdate.');
}

public function destroy(Menu $menu)
{
    $menu->delete();
    return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus.');
}
}
