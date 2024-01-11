<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restauranttable;
//TableID,TableNumber,Capacity,Status
class restauranttableController extends Controller
{
    public function index()
    {
        $restauranttable = Restauranttable::all();
        return response()->json($restauranttable);
    }

    public function show($id)
    {
        $restauranttable = Restauranttable::find($id);
        return response()->json($restauranttable);
    }

    public function store(Request $request)
    {
        $restauranttable = Restauranttable::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $restauranttable = Restauranttable::find($id);
        $restauranttable->update($request->all());
        return response()->json("Berhasil diupdate");


    }

    public function destroy($id)
    {
        $restauranttable = Restauranttable::find($id);
        $restauranttable->delete();
        return response()->json("Berhasil dihapus");
    }
}

