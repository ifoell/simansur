<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $fillable = ['nama','tangggal_lahir', 'jenis_kelamin', 'agama', 'no_identitas', 'alamat', 'instansi', 'jabatan', 'no_telp', 'email', 'alamat_instansi'];
}
