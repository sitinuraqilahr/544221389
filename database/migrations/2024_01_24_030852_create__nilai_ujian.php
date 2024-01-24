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
        Schema::create('_nilai_ujian', function (Blueprint $table) {
            $table->integer('NilaiUjianID');
            $table->integer('CalonMahasiswaID');
            $table->char('JenisUjian');
            $table->float('Nilai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_nilai_ujian');
    }
};
