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
        Schema::create('personils', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('pangkat')->nullable();
            $table->date('tmt_pangkat')->nullable();
            $table->date('tmt_berkala')->nullable();
            $table->string('nrp_nip')->nullable();
            $table->foreignId('satker_id')->nullable();
            $table->string('jabatan')->nullable();
            $table->date('tmt_jabatan')->nullable();
            $table->string('status_marital')->nullable();
            $table->string('nama_isteri_suami')->nullable();
            $table->string('agama')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('fasilitas_kesehatan')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('nik')->nullable();
            $table->string('kasus')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personils');
    }
};
