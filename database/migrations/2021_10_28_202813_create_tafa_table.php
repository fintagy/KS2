<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTafaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tafa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ucsoport_id');
            $table->string('tafa_kod', 10);
            $table->string('tafa_leiras', 600)->nullable();
            $table->dateTime('tafa_letrehozas');
            $table->dateTime('tafa_mod');

            $table->foreign('ucsoport_id')->references('id')->on('ucsoport')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tafa');
    }
}
