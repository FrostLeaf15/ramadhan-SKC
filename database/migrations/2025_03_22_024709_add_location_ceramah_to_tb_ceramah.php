<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tb_ceramah', function (Blueprint $table) {
            $table->string('nama_penceramah')->after('jurusan_user');
            $table->string('lokasi_ceramah')->after('nama_penceramah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_ceramah', function (Blueprint $table) {
            $table->dropColumn('nama_penceramah');
            $table->dropColumn('lokasi_ceramah');
        });
    }
};
