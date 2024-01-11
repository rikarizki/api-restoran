<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderdetails;
//DetailID,OrderID,MenuID,Quantity,Subtotal
class orderdetailsController extends Controller
{
    public function index()
    {
        $orderdetails = Orderdetails::all();
        return response()->json($orderdetails);
    }

    public function show($id)
    {
        $orderdetails = Orderdetails::find($id);
        return response()->json($orderdetails);
    }

    public function store(Request $request)
    {
        $orderdetails = Orderdetails::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $orderdetails = Orderdetails::find($id);
        $orderdetails->update($request->all());
        return response()->json("Berhasil diupdate");


    }

    public function destroy($id)
    {
        $orderdetails = Orderdetails::find($id);
        $orderdetails->delete();
        return response()->json("Berhasil dihapus");
    }
}

