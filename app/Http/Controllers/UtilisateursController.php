<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class UtilisateursController extends Controller
{
    public function liste()
    {
        $utilisateurs = Utilisateur::where('prenom', 'alexis')->first();

        return view('profil', [
            'utilisateurs' => $utilisateurs,
        ]);
    }
}