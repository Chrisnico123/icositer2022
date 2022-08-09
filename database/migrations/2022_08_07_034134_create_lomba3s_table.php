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
        Schema::create('lomba3s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tim');
            $table->string('email')->unique();
            $table->string('nama_ketua');
            $table->string('anggota');
            $table->string('no_wa')->unique();
            $table->string('asal_daerah');
            $table->string('asal_instansi');
            $table->string('ktm')->unique();
            $table->string('sub_tema');
            $table->string('judul_karya');
            $table->string('sketsa');
            $table->string('follow_ig');
            $table->string('upload_twibbon');
            $table->string('surat_pernyataan');
            $table->string('lampiran');
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
        Schema::dropIfExists('lomba3s');
    }
};
