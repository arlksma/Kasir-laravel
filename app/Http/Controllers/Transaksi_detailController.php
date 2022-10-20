<?php

namespace App\Http\Controllers;

use App\Models\Transaksi_detail;
use Illuminate\Http\Request;
use DB;

class Transaksi_detailController extends Controller
{
    public function index($id){
        $detail = DB::table('transaksi_detail')
        ->join('barang','barang.id_barang', '=', 'transaksi_detail.id_barang')
        ->where ('id_transaksi',$id)
        ->get();

        return view('detail.index',compact(['detail']));
    }
}
