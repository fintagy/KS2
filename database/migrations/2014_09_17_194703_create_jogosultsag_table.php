<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosultsagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogosultsag', function (Blueprint $table) {
            $table->id();
            $table->string('jog_nev', 50);
            $table->string('jog_leiras');
            $table->boolean('jog_aktiv');
            $table->dateTime('jog_letrehozas');
            $table->dateTime('jog_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogosultsag');
    }
}
