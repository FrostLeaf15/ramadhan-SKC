<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puasa extends Model
{
    protected $table = 'tb_puasa';
    protected $fillable = ['nama_user', 'kelas_user', 'jurusan_user', 'tanggal_input', 'status'];
}
