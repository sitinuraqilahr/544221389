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
        Schema::create('_calon_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('CalonMahasiswaID');
            $table->char('NamaDepan');
            $table->char('NamaBelakang');
            $table->char('Email');
            $table->char('Alamat');
            $table->char('Telepon');
            $table->date('TanggalLahir');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_calon_mahasiswa');
    }
};
