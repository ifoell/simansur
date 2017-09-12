<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Http\Requests\ClientRequest;

use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function __construct()
    {
     $this->middleware('auth');
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
      'jabatan' => $request->jabatan,
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
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'agama' => $request->agama,
        'no_identitas' => $request->no_identitas,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp,
        'email' => $request->email,
        'instansi' => $request->instansi,
        'jabatan' => $request->jabatan,
        'alamat_instansi' => $request->alamat_instansi,
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
