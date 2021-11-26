<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cim', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kapcsolat_id');
            $table->string('cim_cime', 255);
            $table->boolean('cim_aktiv');
            $table->dateTime('cim_letrehozas');
            $table->dateTime('cim_mod');

            $table->foreign('kapcsolat_id')->references('id')->on('kapcsolat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cim');
    }
}
