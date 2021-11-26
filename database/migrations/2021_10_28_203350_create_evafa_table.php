<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvafaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evafa', function (Blueprint $table) {
            $table->id();
            $table->string('evafa_kod', 10);
            $table->string('evafa_leiras', 600)->nullable();
            $table->dateTime('evafa_letrehozas');
            $table->dateTime('evafa_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evafa');
    }
}
