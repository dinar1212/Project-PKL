<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['nip','tgl_lahir','id_jabatan','jenis_kelamin','alamat','user_id'];
    public $timetamps = true;

    public function pegawai()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function jabatan()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
     public function user()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(User::class, 'user_id');
    }
}
