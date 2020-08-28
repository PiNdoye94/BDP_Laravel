<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients');
            $table->string('prenom');
            $table->string('profession');
            $table->string('salaire');
            $table->string('nomEntreprise');
            $table->string('adresseEntreprise');
            $table->integer('idEmployeur');
            $table->string('carteIdentite');
            $table->date('validiteCin');
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
        Schema::dropIfExists('client_salaries');
    }
}
