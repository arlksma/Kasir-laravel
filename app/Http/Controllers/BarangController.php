<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use DB;

class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barang')
        ->join('jenis','barang.id_jenis', '=', 'jenis.id_jenis')
        ->join('supplier','barang.id_supplier', '=', 'supplier.id_supplier')
        ->get();

        return view('barang.index',compact('barang'));

    }
    public function create()
    {
        $supplier = DB::table('supplier')->get();
        $jenis = DB::table('jenis')->get();
        return view('barang.create',compact(['supplier','jenis']));
    }
    public function store(Request $request)
    {
        $store = barang::create([
            'barang_kode'=>$request->barang_kode,
            'barang_nama'=>$request->barang_nama,
            'id_jenis'=>$request->id_jenis,
            'id_supplier'=>$request->id_supplier,
            'harga_jual'=>$request->harga_jual,
            'barang_status'=>$request->barang_status,
            
            
        ]);
        echo $store->id_barang;
        return redirect('/barang');
    }
   
    public function edit($id)
    {
        $barang = barang::find($id);
        return view('barang.edit',compact(['barang']));
    
    }
    public function update($id,Request $request)
    {
        $barang = barang::find($id);
        $barang->update($request->except(['_token','submit']));
        return redirect('/barang');
    }
    public function destroy($id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
