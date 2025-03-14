<?php

namespace App\Models; // <- Pastikan namespace ini benar

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['name']; // Pastikan kolom ini ada di tabel roles
}
