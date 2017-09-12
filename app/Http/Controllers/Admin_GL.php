<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Surat;
use App\Jenis;
use App\Http\Requests\ClientRequest;

use App\Karyawan;
use App\Http\Requests\KaryawanRequest;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Facades\Auth;

class Admin_GL extends Controller
{

  public function __construct()
  {
   $this->middleware('auth');
  }

    public function index(){
      return view('admin.index');
    }

    public function daftar_surat(){
      return view('admin.daftar_surat');
    }

    public function form_surat(){
      return view('admin.form_surat');
    }

    public function save_surat(SuratRequest $request){
      Surat::create([
        'nomor_surat' => $request->nomor_surat,
        'perihal' => $request->perihal,
        'lampiran' => $request->lampiran,

        ]);
    }


    public function daftar_karyawan(){
      $karyawans = Karyawan::All();
      return view('admin.daftar_karyawan', compact('karyawans'));
    }

    public function form_karyawan(){
      return view('admin.form_karyawan');
    }

    public function save_karyawan(KaryawanRequest $request){
      Karyawan::create([
      'nama' => $request->nama,
      'nip' => $request->nip,
      'jabatan' => $request->jabatan,
      'alamat' => $request->alamat,
    ]);
    $request->session()->flash('message', 'Data Karyawan telah berhasil disimpan');
    return redirect()->back();
    }

    public function edit_karyawan(Karyawan $karyawan){
      return view('admin.edit_karyawan', compact('karyawan'));
    }

    public function update_karyawan(KaryawanRequest $request, Karyawan $karyawan){
      $request->karyawan->update([
        'nama' => $request->nama,
        'nip' => $request->nip,
        'jabatan' => $request->jabatan,
        'alamat' => $request->alamat,
      ]);
      $request->session()->flash('message', 'Data Karyawan telah berhasil Diperbaharui');
      return redirect()->route('daftar_karyawan');
    }

    public function delete_karyawan(Request $request, Karyawan $karyawan){
      $request->karyawan->delete();
      $request->session()->flash('message', 'Data Karyawan telah berhasil Dihapus');
      return redirect()->to('/gl/daftar_karyawan');
    }

    public function daftar_client(){
      $clients = Client::All();
      return view('admin.daftar_client', compact('clients'));
    }

    public function form_client(){
      return view('admin.form_client');
    }

    public function save_client(ClientRequest $request){
      Client::create([
      'nama' => $request->nama,
      'tanggal_lahir' => $request->tanggal_lahir,
      'jenis_kelamin' => $request->jenis_kelamin,
      'agama' => $request->agama,
      'no_identitas' => $request->no_identitas,
      'alamat' => $request->alamat,
      'no_telp' => $request->no_telp,
      'email' => $request->email,
      'instansi' => $request->instansi,
      'alamat_instansi' => $request->alamat_instansi,
    ]);
    $request->session()->flash('message', 'Data Client telah berhasil disimpan');
    return redirect()->back();
    }

    public function edit_client(Client $client){
      return view('admin.edit_client', compact('client'));
    }

    public function update_client(ClientRequest $request, Client $client){
      $request->client->update([
        'nama' => $request->nama,
        'instansi' => $request->instansi,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp,
        'email' => $request->email,
      ]);
      $request->session()->flash('message', 'Data Client telah berhasil Diperbaharui');
      return redirect()->route('daftar_client');
    }

    public function delete_client(Request $request, Client $client){
      $request->client->delete();
      $request->session()->flash('message', 'Data Client telah berhasil Dihapus');
      return redirect()->to('/gl/daftar_client');
    }
}
