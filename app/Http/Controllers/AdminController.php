<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function index(){
        $admin = admin::all();
        return view('admin.index',compact('admin'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $store = admin::create([
            'username'=>$request->username,
            'password'=>$request->password,
            'admin_lavel'=>$request->admin_lavel,
            'admin_nama'=>$request->admin_nama,
            'admin_status'=>$request->admin_status,
            
        ]);
        echo $store->id_admin;
        return redirect('/admin');
    }
   
    public function edit($id)
    {
        $admin = admin::find($id);
        return view('admin.edit',compact(['admin']));
    
    }
    public function update($id,Request $request)
    {
        $admin = admin::find($id);
        $admin->update($request->except(['_token','submit']));
        return redirect('/admin');
    }
    public function destroy($id)
    {
        $admin = admin::find($id);
        $admin->delete();
        return redirect('/admin');
    }

}
