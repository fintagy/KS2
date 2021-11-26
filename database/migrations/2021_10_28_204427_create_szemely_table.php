<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzemelyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szemely', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ugyfel_id');
            $table->string('szem_beosztas', 100)->nullable();
            $table->string('szem_vezeteknev', 50);
            $table->string('szem_keresztnev', 100);
            $table->boolean('szem_aktiv');
            $table->dateTime('szem_letrehozas');
            $table->dateTime('szem_mod');

            $table->foreign('ugyfel_id')->references('id')->on('ugyfel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szemely');
    }
}
