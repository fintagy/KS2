<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgyenivallalkozoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egyenivallalkozo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ugyfel_id');
            $table->unsignedBigInteger('evafa_id');
            $table->string('ev_okmnyszam', 8)->nullable();
            $table->string('ev_statszam', 20)->nullable();
            $table->string('ev_nev', 100)->nullable();
            $table->dateTime('ev_letrehozas');
            $table->dateTime('ev_mod');

            $table->foreign('ugyfel_id')->references('id')->on('ugyfel')->onDelete('cascade');
            $table->foreign('evafa_id')->references('id')->on('evafa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egyenivallalkozo');
    }
}
