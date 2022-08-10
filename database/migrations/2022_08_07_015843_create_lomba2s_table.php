<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba2s', function (Blueprint $table) {
            $table->id();
            $table->string('email_ketua')->unique();
            $table->string('nama_tim')->unique();
            $table->string('asal_pt');
            $table->string('nama_ketua');
            $table->string('nim_ketua')->unique();
            $table->string('prodi_ketua');
            $table->string('nama_anggota1');
            $table->string('nim_anggota1')->unique();
            $table->string('prodi_anggota1');
            $table->string('nama_anggota2');
            $table->string('nim_anggota2')->unique();
            $table->string('prodi_anggota2');
            $table->string('no_wa')->unique();
            $table->string('ktm');
            $table->string('follow_ig');
            $table->string('twibon');
            $table->string('surat_pernyataan');
            $table->string('identitas_peserta');
            $table->string('identitas_dospem');
            $table->string('subtema');
            $table->string('abstrak');
            $table->string('judul_karya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lomba2s');
    }
};
