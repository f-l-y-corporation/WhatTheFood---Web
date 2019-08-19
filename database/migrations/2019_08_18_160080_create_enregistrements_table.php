<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnregistrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enregistrements', function (Blueprint $table) {
            $table->bigIncrements('iden');
            $table->unsignedBigInteger('idsond');
            $table->unsignedBigInteger('idquar');
            $table->unsignedBigInteger('idpgeo');
            $table->unsignedBigInteger('idu');
            $table->dateTime('dateenre');
            $table->integer('statut')->unsigned();
            $table->string('image');
            $table->timestamps();
        });
        Schema::table('enregistrements', function (Blueprint $table) {
            $table->foreign('idsond')->references('idsond')->on('sondages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idquar')->references('idquar')->on('quartiers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idpgeo')->references('idpgeo')->on('position_geos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idu')->references('idu')->on('utilisateurs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enregistrements');
    }
}
