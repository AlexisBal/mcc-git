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
            $table->string('lv1')->default("");
            $table->string('profileleve')->default("");
            $table->string('ambiancetravail')->default("");
            $table->string('tempstravail')->default("");
            $table->string('methodes')->default("");
            $table->string('matieresfav')->default("");
            $table->string('maths')->default("");
            $table->string('physique')->default("");
            $table->string('svt')->default("");
            $table->string('si')->default("");
            $table->string('eco')->default("");
            $table->string('francais')->default("");
            $table->string('philosophie')->default("");
            $table->string('anglais')->default("");
            $table->string('qualite1')->default("");
            $table->string('qualite2')->default("");
            $table->string('qualite3')->default("");
            $table->string('qualite4')->default("");
            $table->string('qualite5')->default("");
            $table->string('defaut1')->default("");
            $table->string('defaut2')->default("");
            $table->string('defaut3')->default("");
            $table->string('raison')->default("");
            $table->string('detail')->default("");
            $table->string('valeur')->default("");
            $table->string('hobbies')->default("");
            $table->string('domaines')->default("");
            $table->string('domainespe')->default("");
            $table->string('metiers')->default("");
            $table->string('metierspe')->default("");
            $table->string('situation')->default("");
            $table->string('salaire')->default("");
            $table->string('projet')->default("");
            $table->string('equipe')->default("");
            $table->string('stress')->default("");
            $table->string('international')->default("");
            $table->string('admission')->default("");
            $table->string('prix')->default("");
            $table->string('formations')->default("");
            $table->string('formationspe')->default("");
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
