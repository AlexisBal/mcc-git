<?php

Route::view('/', 'welcome');

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
    'middleware' => 'App\Http\Middleware\VerificationFormulaireComplete',
], function () {
    Route::get('/mon-compte', 'CompteController@accueil');
    Route::get('/profil', 'UtilisateursController@liste');
    Route::post('/modification-mot-de-passe', 'ModificationMotDePasseController@modificationMotDePasse');
});

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function () {
    Route::get('/deconnexion', 'CompteController@deconnexion');
    Route::get('/mes-informations', 'InformationsProfilController@formulaire');
    Route::post('/mes-informations', 'InformationsProfilController@traitement');
});
