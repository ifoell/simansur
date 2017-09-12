<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('tangggal_lahir');
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('no_identitas');
            $table->string('alamat');
            $table->string('no_telp')->nullable();
            $table->string('email');
            $table->string('instansi');
            $table->string('jabatan')->nullable();
            $table->string('alamat_instansi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
