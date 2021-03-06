<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKottipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kottip', function (Blueprint $table) {
            $table->id();
            $table->string('kottip_nev', 255);
            $table->dateTime('kottip_letrehozas');
            $table->dateTime('kottip_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kottip');
    }
}
