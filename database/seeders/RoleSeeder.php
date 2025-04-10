<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Jalankan database seeder.
     */
    public function run(): void
    {
        // Matikan sementara foreign key checks agar bisa hapus semua data
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Hapus semua data di tabel roles tanpa truncate
        Role::query()->delete();

        // Hidupkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Tambahkan role baru
        Role::create(['name' => 'siswa', 'guard_name' => 'web']);
        Role::create(['name' => 'guru', 'guard_name' => 'web']);
        Role::create(['name' => 'admin', 'guard_name' => 'web']);
    }
}
