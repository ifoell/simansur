<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;

class Admin_GL extends Controller
{
    public function index(){
      return view('admin.index');
    }

    public function daftar_surat(){
      return view('admin.daftar_surat');
    }

    public function daftar_direksi(){
      return view('admin.daftar_direksi');
    }

    public function daftar_client(){
      return view('admin.daftar_client');
    }

    public function daftar_surat_masuk(){
      return view('admin.daftar_surat_masuk');
    }

    public function form_surat(){
      return view('admin.form_surat');
    }

    public function form_client(){
      return view('admin.form_client');
    }

    public function save_client(Request $request){
      Client::create([
      'nama' => $request->nama,
      'instansi' => $request->instansi,
      'alamat' => $request->alamat,
      'no_telp' => $request->no_telp,
      'email' => $request->email,
    ]);

    return redirect()->back();
    }
}
