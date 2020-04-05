<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        return view('mon-compte');
	}
	
    public function deconnexion()
	{
	    auth()->logout();

	    flash("Vous êtes maintenant déconnecté.")->success();

	    return redirect('/');
	}	
}