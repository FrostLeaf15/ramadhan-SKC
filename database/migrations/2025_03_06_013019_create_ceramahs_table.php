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
        Schema::create('tb_ceramah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('kelas_user');
            $table->string('jurusan_user');
            $table->date('tanggal_input');
            $table->enum('tipe_isi', ['teks', 'gambar', 'dokumen']);
            $table->text('isi_teks')->nullable();
            $table->string('isi_gambar')->nullable();
            $table->string('isi_dokumen')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ceramah');
    }
};
