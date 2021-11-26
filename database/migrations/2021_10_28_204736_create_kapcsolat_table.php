<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKapcsolatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapcsolat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ugyfel_id');
            $table->unsignedBigInteger('szemely_id');            
            $table->dateTime('kapcs_letrehozas');
            $table->dateTime('kapcs_mod');

            $table->foreign('ugyfel_id')->references('id')->on('ugyfel')->onDelete('cascade');
            $table->foreign('szemely_id')->references('id')->on('szemely')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kapcsolat');
    }
}
