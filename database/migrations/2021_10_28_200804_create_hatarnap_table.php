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
            $table->dateTime('hatn_nap');
            $table->boolean('hatn_aktiv');
            $table->dateTime('hatn_letrehozas');
            $table->dateTime('hatn_mod');
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
