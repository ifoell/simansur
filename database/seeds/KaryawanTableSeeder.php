<?php

use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
<<<<<<< HEAD
        DB::table('karyawan')->insert([
=======
        DB::table('karyawans')->insert([
>>>>>>> 4d6a1397083ed9f1f2fe91b7935d87c27006d600
        	'nama' => 'Noviandri',
        	'nip' => '-',
        	'jabatan' => 'Chief Executive Officer',
        	'alamat' => 'Jl. Kampung Gedong No. 28 RT/RW 03/19 Kel. Kemiri, Kec. Beji, Depok, Jawa Barat',
        	]);
    }
}
