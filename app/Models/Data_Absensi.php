<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Absensi extends Model
{
    use HasFactory;
    public $fillable = ['id_absensi', 'keterangan'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
    //membuat relasi one to one
    public function jabatan()
    {
        // data dari model 'siswa' bisa memiliki 1 data
        // data model 'wali' melalui id_siswa
        return $this->hasOne(Jabatan::class, 'id_jabatan');
    }
}
