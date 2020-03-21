<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        return view('mon-compte');
	}
	
	public function formulaire()
    {
		return view('mes-informations');
	}

	public function traitement()
    {
        request()->validate([
			'niveauetude' => ['required', 'string', 'max:255'],
			'bac' => ['required', 'string', 'max:255'],
			'specialite' => ['required', 'string', 'max:255'],
			'qualite1' => ['required', 'string', 'max:255'],
			'qualite2' => ['required', 'string', 'max:255'],
			'qualite3' => ['required', 'string', 'max:255'],
			'qualite4' => ['required', 'string', 'max:255'],
			'qualite5' => ['required', 'string', 'max:255'],
			'defaut1' => ['required', 'string', 'max:255'],
			'defaut2' => ['required', 'string', 'max:255'],
			'defaut3' => ['required', 'string', 'max:255'],
			'profil' => ['required', 'string', 'max:255'],
        ]);

        $utilisateur = Utilisateur::create([
            'niveauetude' => request('niveauetude'),
            'bac' => request('bac'),
            'specialite' => request('specialite'),
            'qualite1' => request('qualite1'),
            'qualite2' => request('qualite2'),
            'qualite3' => request('qualite3'),
            'qualite4' => request('qualite4'),
            'qualite5' => request('qualite5'),
            'defaut1' => request('defaut1'),
            'defaut2' => request('defaut2'),
            'defaut3' => request('defaut3'),
            'profil' => request('profil'),
		]);
	}

    public function deconnexion()
	{
	    auth()->logout();

	    flash("Vous êtes maintenant déconnecté.")->success();

	    return redirect('/');
    }

    public function modificationMotDePasse()
    {
	    request()->validate([
	        'password' => ['required', 'confirmed', 'min:8'],
	        'password_confirmation' => ['required'],
	    ]);

	    auth()->user()->update([
		    'mot_de_passe' => bcrypt(request('password')),
		]);

		flash("Votre mot de passe a bien été mis à jour.")->success();

         return redirect('/mon-compte');
    }
}