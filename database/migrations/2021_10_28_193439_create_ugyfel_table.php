<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUgyfelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ugyfel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ucsoport_id');
            $table->string('ugyf_azonosito', 10);
            $table->string('ugyf_leiras', 255)->nullable();
            $table->string('ugyf_adoszam', 13)->nullable();
            $table->string('ugyf_kadoszam', 13)->nullable();
            $table->date('ugyf_alapitas')->nullable();
            $table->boolean('ugyf_aktiv'); 
            $table->datetime('ugyf_letrehozas');
            $table->dateTime('ugyf_mod');
                                   
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
        Schema::dropIfExists('ugyfel');
    }
}
