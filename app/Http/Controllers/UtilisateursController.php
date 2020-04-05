<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Profil;
use Illuminate\Support\Facades\Auth;

class UtilisateursController extends Controller
{
    public function liste()
    {
        $utilisateurs = Utilisateur::where('id', '=',Auth::user()->id)->first();
        $profils = Profil::where('id', '=',Auth::user()->id)->first();

        return view('profil', [
            'utilisateurs' => $utilisateurs,
            'profils' => $profils,

        ]);
    }
}