<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
// membuat fk id_siswa yang mengacu kpd field id di tabel siswas
            $table->foreign('id_pegawai')->references('id')->on('pegawais')->onDelete('CASCADE');

            $table->String('tanggal');

            $table->time('jam_masuk');

            $table->String('status');

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
        Schema::dropIfExists('absensis');
    }
}
