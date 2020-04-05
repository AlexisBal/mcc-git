<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('register');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:utilisateurs'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
        ]);

        $utilisateur = Utilisateur::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);
      
        auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),

        ]);

        {
            flash("Vous êtes maintenant inscrit. Remplissez ce formulaire pour terminer votre inscription !")->success();

            return redirect('/mes-informations');
        }
    }
}