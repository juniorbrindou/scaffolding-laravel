<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('tel')->nullable();
            $table->string('email')->unique();
            $table->date('date_naiss')->nullable();
            $table->integer('ville_habit_id');
            $table->string('ville_naiss_id');
            $table->integer('quartier_habit_id')->nullable();
            $table->string('password');


            $table->integer('type_carte_id');
            $table->string('carte');
            $table->string('diplome');
            $table->integer('experience')->nullable();
            $table->integer('type_id');
            $table->string('societe')->nullable();
            $table->string('commune_travail_id')->nullable();



            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('prestataires');
    }
}
