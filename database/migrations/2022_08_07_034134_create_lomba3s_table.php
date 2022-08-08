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
            $table->string('nama_tim', 25);
            $table->string('email', 30)->unique();
            $table->string('nama_ketua', 25);
            $table->string('anggota', 100);
            $table->string('no_wa', 15)->unique();
            $table->string('asal_daerah', 25);
            $table->string('asal_instansi', 30);
            $table->string('ktm', 100)->unique();
            $table->string('sub_tema', 30);
            $table->string('judul_karya', 50);
            $table->string('sketsa', 100);
            $table->string('follow_ig', 100);
            $table->string('upload_twibbon', 100);
            $table->string('surat_pernyataan', 100);
            $table->string('lampiran', 100);
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
