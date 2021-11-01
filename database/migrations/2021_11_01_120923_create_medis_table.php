<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medis', function (Blueprint $table) {
            $table->id();
             $table->string('nom');
             $table->string('prenom');
             $table->integer('date_de_naissance');
            $table->string('type');

         $table->string('nom_de_poste');
             
              $table->integer('salaire');

              $table->string('ville');
              $table->integer('code_postal');


            $table->text('numero_portable');
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
        Schema::dropIfExists('medis');
    }
}
