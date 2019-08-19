<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->bigIncrements('idu');
            $table->unsignedBigInteger('idsond');
            $table->unsignedBigInteger('idtu');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('code');
            $table->string('password');
            $table->string('cni');
            $table->timestamps();
        });
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->foreign('idsond')->references('idsond')->on('sondages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idtu')->references('idtu')->on('type_utilisateurs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
