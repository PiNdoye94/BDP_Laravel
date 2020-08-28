<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients');
            $table->integer('numeroCompte');
            $table->integer('numeroAgence');
            $table->integer('cleRib');
            $table->dateTime('dateOuverture');
            $table->float('solde');
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
        Schema::dropIfExists('comptes');
    }
}
