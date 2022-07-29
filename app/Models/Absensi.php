<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    public $fillable = ['nama_pegawai', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'status', 'keterangan'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
    //membuat relasi one to one
    public function pegawai()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

}
