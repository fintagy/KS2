<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotelezettsegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotelezettseg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kottip_id');
            $table->string('kot_leiras', 512)->nullable();
            $table->string('kot_szam', 30)->nullable();
            $table->string('kot_kie', 30)->nullable();
            $table->boolean('kot_aktiv');
            $table->dateTime('kot_letrehozas');
            $table->dateTime('kot_mod');
            
            $table->foreign('kottip_id')->references('id')->on('kottip')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kotelezettseg');
    }
}
