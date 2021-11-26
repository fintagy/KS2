<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcsoportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucsoport', function (Blueprint $table) {
            $table->id();
            $table->string('ucsop_nev', 50);
            $table->dateTime('ucsop_letrehozas');
            $table->dateTime('ucsop_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ucsoport');
    }
}
