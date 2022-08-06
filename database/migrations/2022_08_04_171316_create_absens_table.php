<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_absensi')->references('id')->on('absensi')->onDelete('CASCADE');

            $table->unsignedBigInteger('id_pegawai');
// membuat fk id_siswa yang mengacu kpd field id di tabel siswas
            $table->foreign('id_pegawai')->references('id')->on('pegawais')->onDelete('CASCADE');
           

            $table->unsignedBigInteger('id_jabatan');
// membuat fk id_siswa yang mengacu kpd field id di tabel siswas
            $table->foreign('id_jabatan')->references('id')->on('jabatans')->onDelete('CASCADE');
            $table->date('tanggal');
            $table->time('jam_masuk');
            $table->String('status');
            $table->String('keterangan');

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
        Schema::dropIfExists('absens');
    }
}
