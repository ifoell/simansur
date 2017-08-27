<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $fillable = ['nama', 'nip', 'jabatan', 'alamat'];
    public $table = "karyawan";
}
