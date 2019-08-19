<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponses', function (Blueprint $table) {
            $table->bigIncrements('idrep');
            $table->unsignedBigInteger('idquest');
            $table->unsignedBigInteger('iden');
            $table->string('reponse');
            $table->timestamps();
        });
        Schema::table('reponses', function (Blueprint $table) {
            $table->foreign('idquest')->references('idquest')->on('questions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('iden')->references('iden')->on('enregistrements')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponses');
    }
}
