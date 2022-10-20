<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function index(){
        $supplier = supplier::all();
        return view('supplier.index',compact('supplier'));
    }
    public function create()
    {
        return view('supplier.create');
    }
    public function store(Request $request)
    {
        $store = supplier::create([
            'supplier_nama'=>$request->supplier_nama,
            'supplier_alamat'=>$request->supplier_alamat,
            'supplier_phone'=>$request->supplier_phone,
            'supplier_status'=>$request->supplier_status,
        ]);
         echo $store->id_supplier;
        return redirect('/supplier');
    }
   
    public function edit($id)
    {
        $supplier = supplier::find($id);
        return view('supplier.edit',compact(['supplier']));
    
    }
    public function update($id,Request $request)
    {
        $supplier = supplier::find($id);
        $supplier->update($request->except(['_token','submit']));
        return redirect('/supplier');
    }
    public function destroy($id)
    {
        $supplier = supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');
    }
}
