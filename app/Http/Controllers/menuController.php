<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
//MenuID,ItemName,Description,Price,Category
class menuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return response()->json($menu);
    }

    public function show($id)
    {
        $menu = Menu::find($id);
        return response()->json($menu);
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->update($request->all());
        return response()->json("Berhasil diupdate");


    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return response()->json("Berhasil dihapus");
    }
}

