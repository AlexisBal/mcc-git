<?php

Route::view('/', 'welcome');

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function () {
    Route::get('/deconnexion', 'CompteController@deconnexion');
    Route::get('/mes-informations', 'InformationsProfilController@formulaire_part1');
    Route::post('/mes-informations', 'InformationsProfilController@traitement_part1');
    Route::get('/mes-informations-suite', 'InformationsProfilController@formulaire_part2');
    Route::post('/mes-informations-suite', 'InformationsProfilController@traitement_part2');
    Route::get('/mes-informations-fin', 'InformationsProfilController@formulaire_part3');
    Route::post('/mes-informations-fin', 'InformationsProfilController@traitement_part3');
});

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
    'middleware' => 'App\Http\Middleware\VerificationFormulaireComplete',
], function () {
    Route::get('/mon-compte', 'CompteController@accueil');
    Route::get('/profil', 'AfficheProfilController@liste');
    Route::get('/modification-profil', 'ModifieProfilController@afficher');
    Route::post('/modification-profil', 'ModifieProfilController@modifier');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
