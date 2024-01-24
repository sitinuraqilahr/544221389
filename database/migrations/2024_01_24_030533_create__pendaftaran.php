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
        Schema::create('_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('PendaftaranID');
            $table->integer('CalonMahasiswaID');
            $table->date('TanggalPendaftaran');
            $table->char('StatusPendaftaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pendaftaran');
    }
};
