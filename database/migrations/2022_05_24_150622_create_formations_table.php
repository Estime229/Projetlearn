<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_formation'); 
            $table->string('description');
            $table->integer('prix');
            $table->string('lien_formation')->nullable();
            $table->string('status');
            $table->string('lien_image');
            $table->string('lien_domaine');
            $table->date('date_formation')->nullable();
            $table->string('heure_formation')->nullable();
            $table->string('addresse_formation')->nullable();
            $table->integer('nbr_maximal')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
           
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
        Schema::dropIfExists('formations');
    }
}
