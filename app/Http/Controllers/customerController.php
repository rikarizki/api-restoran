<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
//CustomerID,FirstName,LastName,Email,Phone,Address
class customerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return response()->json("Berhasil diupdate");


    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json("Berhasil dihapus");
    }
}

