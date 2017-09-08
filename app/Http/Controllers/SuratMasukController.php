<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_Masuk;
use App\Http\Requests\SuratMasukRequest;
use Validator;
use App\Gambar_Surat;

class SuratMasukController extends Controller
{

  public function daftar_surat_masuk(){
    $surat_masuks = Surat_Masuk::All();
    return view('admin.daftar_surat_masuk', compact('surat_masuks'));
  }

    public function form_surat_masuk()
    {
    	return view('admin.form_surat_masuk');
    }

    public function save_surat_masuk(SuratMasukRequest $SuratMasukrequest)
    {
    	$surat_masuk = Surat_Masuk::create($SuratMasukrequest->all());
        foreach ($SuratMasukrequest->photos as $photo) {
            $filename = $photo->store('photos');
            $destinationPath = 'photos';
            $photo->move($destinationPath, $filename);
            Gambar_Surat::create([
                'id_surat_masuk' => $surat_masuk->id,
                'filename' => $filename
            ]);
          }

          // $image = new Gambar_Surat;
          //
          //   $file = $request->file('filename');
          //   $destination_path = 'uploads/';
          //   $filename = str_random(6).'_'.$file->getClientOriginalName();
          //   $file->move($destination_path, $filename);
          //
          //   $image->file = $destination_path . $filename;
          //   $image->save();

	    $SuratMasukrequest->session()->flash('message', 'Data Client telah berhasil disimpan');
	    return redirect()->back();
    }

    public function delete_surat_masuk(Request $request, Surat_Masuk $surat_masuk, Gambar_Surat $gambar_surat){
      $request->surat_masuk->delete();
      // $request->gambar_surat->delete();
      $request->session()->flash('message', 'Data Client telah berhasil Dihapus');
      return redirect()->to('/gl/daftar_surat_masuk');
    }

    public function show_surat_masuk(){
      return view('admin.show_surat_masuk');
    }

}
