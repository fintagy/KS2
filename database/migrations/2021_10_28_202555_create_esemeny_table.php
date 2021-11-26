<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsemenyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esemeny', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ugyfel_id');
            $table->unsignedBigInteger('kothat_id');
            $table->dateTime('esem_letrehozas');
            $table->dateTime('esem_mod');

            $table->foreign('ugyfel_id')->references('id')->on('ugyfel')->onDelete('cascade');
            $table->foreign('kothat_id')->references('id')->on('kothat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esemeny');
    }
}
