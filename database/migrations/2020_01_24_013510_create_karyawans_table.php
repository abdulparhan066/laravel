<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('ktp_no');
            $table->string('jenis_kelamin');
            $table->text('alamat_rumah');
            $table->string('telepon');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewenangan');
            $table->string('suku_bangsa');
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
        Schema::dropIfExists('karyawan');
    }
}
