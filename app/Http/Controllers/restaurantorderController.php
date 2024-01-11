<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurantorder;
//OrderID,CustomerID,TableID,OrderDate,TotalAmount
class restaurantorderController extends Controller
{
    public function index()
    {
        $restaurantorder = Restaurantorder::all();
        return response()->json($restaurantorder);
    }

    public function show($id)
    {
        $restaurantorder = Restaurantorder::find($id);
        return response()->json($restaurantorder);
    }

    public function store(Request $request)
    {
        $restaurantorder = Restaurantorder::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $restaurantorder = Restaurantorder::find($id);
        $restaurantorder->update($request->all());
        return response()->json("Berhasil diupdate");


    }

    public function destroy($id)
    {
        $restaurantorder = Restaurantorder::find($id);
        $restaurantorder->delete();
        return response()->json("Berhasil dihapus");
    }
}

