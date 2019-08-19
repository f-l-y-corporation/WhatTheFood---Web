<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartiers', function (Blueprint $table) {
            $table->bigIncrements('idquar');
            $table->unsignedBigInteger('idville');
            $table->string('quartier');
            $table->timestamps();
        });
        Schema::table('quartiers', function (Blueprint $table) {
            $table->foreign('idville')->references('idville')->on('villes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quartiers');
    }
}
