<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = ['nomor_surat', 'id_jenis', 'id_client', 'perihal', 'lampiran', 'tanggal'];

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }

    public function jenis()
    {
    	return $this->belongsTo('App\Jenis');
    }
}
