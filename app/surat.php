<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';

// mengambil data user dari model Client
    // berdasarkan foreign key 'client_id'
        public function client() {
        return $this->belongsTo('App\Client');
    }

            public function karyawan() {
        return $this->belongsTo('App\Karyawan');
    }

            public function jenis() {
        return $this->belongsTo('App\Jenis');
    }
}
