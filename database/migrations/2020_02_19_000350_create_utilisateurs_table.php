<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('mot_de_passe');
            $table->string('niveauetude');
            $table->string('bac');
            $table->string('specialite');
            $table->string('qualite1');
            $table->string('qualite2');
            $table->string('qualite3');
            $table->string('qualite4');
            $table->string('qualite5');
            $table->string('defaut1');
            $table->string('defaut2');
            $table->string('defaut3');
            $table->string('profil');
            $table->rememberToken();
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
        Schema::dropIfExists('utilisateurs');
    }
}
