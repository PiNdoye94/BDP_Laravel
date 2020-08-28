<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteCourantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_courants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comptes_id')->unsigned();
            $table->foreign('comptes_id')->references('id')->on('comptes');
            $table->string('nomEmployeur');
            $table->string('adresseEmployeur');
            $table->string('raisonSocial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte_courants');
    }
}
