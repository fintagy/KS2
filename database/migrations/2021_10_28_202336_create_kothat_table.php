<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKothatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kothat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hatarnap_id');
            $table->unsignedBigInteger('kot_id');
            $table->dateTime('kothat_letrehozas');
            $table->dateTime('kothat_mod');

            $table->foreign('hatarnap_id')->references('id')->on('hatarnap')->onDelete('cascade');
            $table->foreign('kot_id')->references('id')->on('kotelezettseg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kothat');
    }
}
