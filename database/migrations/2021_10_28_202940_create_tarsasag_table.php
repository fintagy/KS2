<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarsasagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarsasag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ugyfel_id');
            $table->unsignedBigInteger('tafa_id');
            $table->string('tars_cegnev', 100);
            $table->string('tars_cegjszam', 12)->nullable();            
            $table->dateTime('tars_letrehozas');
            $table->dateTime('tars_mod');

            $table->foreign('ugyfel_id')->references('id')->on('ugyfel')->onDelete('cascade');
            $table->foreign('tafa_id')->references('id')->on('tafa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarsasag');
    }
}
