<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');

            $table->unsignedBigInteger('id_jabatan');
// // membuat fk id_siswa yang mengacu kpd field id di tabel siswas
            $table->foreign('id_jabatan')->references('id')->on('jabatans')->onDelete('CASCADE');

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
        Schema::dropIfExists('pegawais');
    }
}
