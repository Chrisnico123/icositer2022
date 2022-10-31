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
        Schema::create('like_posts', function (Blueprint $table) {
            $table->id();
            $table->string("pwk");
            $table->string("teknik_fisika");
            $table->string("rekayasa_kehutanan");
            $table->string("rekayasa_instrumentasi_dan_automasi");
            $table->string("teknik_elektro");
            $table->string("sap");
            $table->string("teknik_lingkungan");
            $table->string("sistem_energi");
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
        Schema::dropIfExists('like_posts');
    }
};