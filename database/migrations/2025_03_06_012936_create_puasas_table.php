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
        Schema::create('tb_puasa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('kelas_user');
            $table->string('jurusan_user');
            $table->date('tanggal_input');
            $table->enum('status', ['saya berpuasa', 'saya berhalangan', 'saya sakit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_puasa');
    }
};
