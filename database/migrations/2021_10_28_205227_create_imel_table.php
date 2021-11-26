<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kapcsolat_id');
            $table->string('imel_cim', 100);
            $table->boolean('imel_aktiv');
            $table->dateTime('imel_letrehozas');
            $table->dateTime('imel_mod');

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
        Schema::dropIfExists('imel');
    }
}
