<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_Masuk;
use App\Http\Requests\SuratMasukRequest;
use Validator;
use App\Gambar_Surat;

class SuratMasukController extends Controller
{
    public function form_surat_masuk()
    {
    	return view('admin.form_surat_masuk');
    }

    public function save_surat_masuk(SuratMasukRequest $request)
    {
    	// Surat_Masuk::create([
    	// 	'tanggal'=> $request->tanggal,
    	// 	'keterangan' => $request->keterangan,
    	// 	]);

    	$surat_masuk = Surat_Masuk::create($request->all());

        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            Gambar_Surat::create([
                'id_surat_masuk' => $surat_masuk->id,
                'filename' => $filename
            ]);
        }

	    $request->session()->flash('message', 'Data Client telah berhasil disimpan');
	    return redirect()->back();
    }

}
