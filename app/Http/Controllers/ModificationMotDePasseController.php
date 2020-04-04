<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificationMotDePasseController extends Controller
{
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
