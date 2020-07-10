<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContraventionssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
         //Blueprint: utilisé pour définir la nouvelle table:blog_models
        Schema::create('contraventionss', function (Blueprint $table) {

            $table->increments('id');
            $table->string('classe');
            $table->string('motif')->unique();
            $table->string('montant');
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
        Schema::dropIfExists('contraventionss');
    }
}
