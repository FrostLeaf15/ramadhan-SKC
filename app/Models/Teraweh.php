<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teraweh extends Model
{
    protected $table = 'tb_teraweh';
    protected $fillable = ['nama_user', 'kelas_user', 'jurusan_user', 'tanggal_input', 'status'];
}
