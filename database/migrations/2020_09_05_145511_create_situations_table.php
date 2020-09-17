<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituationsTable extends Migration
{
    public function up()
    {
        // creation de Region table
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        // creation de la table villes
        Schema::create('villes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->unsignedInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        // Creation de la table Communes
        Schema::create('communes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->unsignedInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        // creation de la table quartiers
        Schema::create('quartiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->unsignedInteger('commune_id');
            $table->foreign('commune_id')->references('id')->on('communes');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    // suppression de toutes les tables migrate:rollback
    public function down()
    {
        Schema::dropIfExists('quartiers');
        Schema::dropIfExists('communes');
        Schema::dropIfExists('villes');
        Schema::dropIfExists('regions');
    }
}
