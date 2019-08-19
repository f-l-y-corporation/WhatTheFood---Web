<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->bigIncrements('idpays');
            $table->unsignedBigInteger('idsond');
            $table->string('pays');
            $table->timestamps();
        });
        Schema::table('pays', function (Blueprint $table) {
            $table->foreign('idsond')->references('idsond')->on('sondages')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pays');
    }
}
