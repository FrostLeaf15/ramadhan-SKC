<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ceramah extends Model
{
    protected $table = 'tb_ceramah';
    protected $fillable = [
        'nama_user',
        'kelas_user',
        'jurusan_user',
        'nama_penceramah',
        'lokasi_ceramah', 
        'tanggal_input',
        'tipe_isi', 
        'isi_teks',
        'isi_gambar',
        'isi_dokumen'
    ];
}
