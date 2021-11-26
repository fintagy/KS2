<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kapcsolat_id');
            $table->string('tel_szam', 13);
            $table->boolean('tel_aktiv');
            $table->dateTime('tel_letrehozas');
            $table->dateTime('tel_mod');
            
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
        Schema::dropIfExists('telefon');
    }
}
