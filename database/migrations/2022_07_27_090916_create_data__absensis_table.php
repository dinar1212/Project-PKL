<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_absensi');
// membuat fk id_siswa yang mengacu kpd field id di tabel siswas
            $table->foreign('id_absensi')->references('id')->on('absensis')->onDelete('CASCADE');
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
        Schema::dropIfExists('data__absensis');
    }
}
