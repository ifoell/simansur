<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable = ['nama', 'nip', 'jabatan', 'alamat'];
<<<<<<< HEAD
    protected $table = 'karyawan';
=======
    public $table = "karyawan";
>>>>>>> 4d6a1397083ed9f1f2fe91b7935d87c27006d600
}
