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
        Schema::create('tb_ngaji', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('kelas_user');
            $table->string('jurusan_user');
            $table->string('nama_surat');
            $table->string('ayat_quran');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ngaji');
    }
};
