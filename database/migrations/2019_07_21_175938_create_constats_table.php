<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('constats', function (Blueprint $table) {
        $table->increments('id');
        $table->string('prenom_nom_C');
        $table->string('permis_conduire_C');
            $table->string('carte_grise');
              $table->string('date_accusation');
              $table->string('date_limite_versement');
              $table->string('heure_accusation');
              $table->string('lieu_accusation');
                $table->string('ref')->unique();
                 $table->integer('contraventions_id')->unsigned()->index();
                 $table->foreign('contraventions_id')->references('id')->on('contraventionss')->onDeletes('cascade');
                                $table->integer('users_id')->unsigned()->index();
                                $table->foreign('users_id')->references('id')->on('users')->onDeletes('cascade');
                                $table->string('statut');


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
        Schema::dropIfExists('constats');
    }
}
