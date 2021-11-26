<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHatarnapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hatarnap', function (Blueprint $table) {
            $table->id();
            $table->dateTime('hat_nap');
            $table->dateTime('hat_letrehozas');
            $table->dateTime('hat_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hatarnap');
    }
}
