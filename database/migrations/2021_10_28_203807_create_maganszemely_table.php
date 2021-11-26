<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaganszemelyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maganszemely', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ugyfel_id');
            $table->unsignedBigInteger('msafa_id');
            $table->string('ms_adoazonosito', 10)->nullable()->unique();
            $table->string('ms_tajszam', 9)->nullable()->unique();
            $table->string('ms_szulhely', 50)->nullable();
            $table->date('ms_szulido')->nullable();
            $table->string('ms_aneve', 50)->nullable();
            $table->string('ms_szigszam', 8)->nullable();
            $table->dateTime('ms_letrehozas');
            $table->dateTime('ms_mod');

            $table->foreign('ugyfel_id')->references('id')->on('ugyfel')->onDelete('cascade');
            $table->foreign('msafa_id')->references('id')->on('msafa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maganszemely');
    }
}
