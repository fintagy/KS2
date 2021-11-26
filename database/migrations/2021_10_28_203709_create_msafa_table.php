<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsafaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msafa', function (Blueprint $table) {
            $table->id();
            $table->string('msafa_kod', 10);
            $table->string('msafa_leiras', 600)->nullable();
            $table->dateTime('msafa_letrehozas');
            $table->dateTime('msafa_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msafa');
    }
}
