<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnToClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client', function (Blueprint $table) {
             $table->date('tangggal_lahir')->after('nama');
              $table->string('jenis_kelamin')->after('tangggal_lahir');
               $table->string('agama')->after('jenis_kelamin');
                $table->string('no_identitas')->after('agama');
                 $table->string('jabatan')->after('instansi');
                  $table->string('alamat_instansi')->after('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client', function (Blueprint $table) {
            //
        });
    }
}
