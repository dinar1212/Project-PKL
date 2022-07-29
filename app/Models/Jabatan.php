<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
    public function absensi()
    {
        // data dari model 'siswa' bisa memiliki 1 data
        // data model 'wali' melalui id_siswa
        return $this->hasOne(Absensi::class, 'id_jabatan');
    }
}
