<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ngaji extends Model
{
    protected $table = 'tb_ngaji';
    protected $fillable = ['nama_user', 'kelas_user', 'jurusan_user', 'nama_surat', 'ayat_quran'];
}
