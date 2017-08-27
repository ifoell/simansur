<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Admin_GL extends Controller
{
    public function index(){
      return view('admin.index');
    }

    public function tulis_surat(){
      return view('admin.tulis_surat');
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
}
