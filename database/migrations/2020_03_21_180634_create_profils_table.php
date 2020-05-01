<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->string('niveauetude')->default("");
            $table->string('specialite')->default("");
            $table->string('qualite1')->default("");
            $table->string('qualite2')->default("");
            $table->string('qualite3')->default("");
            $table->string('qualite4')->default("");
            $table->string('qualite5')->default("");
            $table->string('defaut1')->default("");
            $table->string('defaut2')->default("");
            $table->string('defaut3')->default("");
            $table->string('hobbie')->default("");
            $table->string('profileleve')->default("");
            $table->string('tempstravail')->default("");
            $table->string('methodes')->default("");
            $table->string('ambiancetravail')->default("");
            $table->string('matieresfav')->default("");
            $table->string('equipe')->default("");
            $table->string('valeur')->default("");
            $table->string('maths')->default("");
            $table->string('physique')->default("");
            $table->string('svt')->default("");
            $table->string('si')->default("");
            $table->string('francais')->default("");
            $table->string('philosophie')->default("");
            $table->string('anglais')->default("");
            $table->string('domaines')->default("");
            $table->string('metiers')->default("");
            $table->string('salaire')->default("");
            $table->string('international')->default("");
            $table->string('admission')->default("");
            $table->string('prix')->default("");
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
        Schema::dropIfExists('profils');
    }
}
