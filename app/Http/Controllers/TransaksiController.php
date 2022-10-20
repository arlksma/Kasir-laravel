<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\transaksi;
use App\Models\transaksi_detail;
use App\Models\barang;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('transaksi')->get();
        return view('transaksi.index',compact(['transaksi']));
    }
    public function create()
    {
        $barang = DB::table('barang')->get();
        return view('transaksi.create',compact(['barang']));
    }
    public function store(Request $request)
    {
        $store = transaksi::create([
            'id_admin'=>$request->id_admin,
            'transaksi_tanggal'=>$request->transaksi_tanggal,
            'transaksi_nota'=>$request->transaksi_nota,
            'transaksi_status'=>$request->transaksi_status,
            
        ]);
        echo $store->id_transaksi;

        $store = transaksi_detail::create([
            'id_transaksi'=>$store->id_transaksi,
            'id_barang'=>$request->id_barang,
            'transaksi_jenis'=>$request->transaksi_jenis,
            'transaksi_harga'=>$request->transaksi_harga,
            'transaksi_jumlah'=>$request->transaksi_jumlah,
            'transaksi_detail_status'=>$request->transaksi_status,
            
        ]);
        echo $store->id_transaksi_detail;
        return redirect('/transaksi');
    }
   
    public function edit($id)
    {
        $transaksi = transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi']));
    
    }
    public function update($id,Request $request)
    {
        $transaksi = transaksi::find($id);
        $transaksi->update($request->except(['_token','submit']));
        return redirect('/transaksi');
    }
    public function destroy($id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');
    }

}
