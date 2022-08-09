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
        Schema::create('lomba1s', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nama_team')->unique();
            $table->string('perguruan_tinggi');
            $table->string('nama_ketua');
            $table->integer('nim_ketua')->unique();
            $table->string('prodi_ketua');
            $table->string('nama_anggota1');
            $table->integer('nim_anggota1')->unique();
            $table->string('prodi_anggota1');
            $table->string('nama_anggota2');
            $table->integer('nim_anggota2')->unique();
            $table->string('prodi_anggota2');
            $table->bigInteger('no_wa_ketua')->unique();
            $table->string('KTM');
            $table->string('follow_ig');
            $table->string('twibbon');
            $table->string('subtema');
            $table->string('judul_karya');
            $table->string('abstrak');
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
        Schema::dropIfExists('lomba1s');
    }
};