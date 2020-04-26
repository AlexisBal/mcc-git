<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Profil;
use Illuminate\Support\Facades\Auth;

class AfficheProfilController extends Controller
{
    public function liste()
    {
        $utilisateurs = Utilisateur::where('id', '=',Auth::user()->id)->first();
        $profils = Profil::where('user_id', '=',Auth::user()->id)->first();
        $spe = $profils->specialite;
       
        if ($spe == "m_es_h") {
            $spe = "MATHS-SES-HUMANITES";
        }

        if ($spe == "m_s_h") {
            $spe = "MATHS-SVT-HUMANITES";
        }
        
        if ($spe == "m_p_sp") {
            $spe = "MATHS-PHYS-SPO";
        }

        if ($spe == "m_es_s") {
            $spe = "MATHS-SES-SVT";
        }

        if ($spe == "m_es_p") {
            $spe = "MATHS-SES-PHYS";
        }

        if ($spe == "m_p_lv") {
            $spe = "MATHS-PHYS-LV et CULT ANGLAIS";
        }

        if ($spe == "m_es_lv") {
            $spe = "MATHS-PHYS-LV et CULT ANGLAIS";
        }

        if ($spe == "m_es_sp") {
            $spe = "MATHS-SES-SPO";
        }

        if ($spe == "m_p_si") {
            $spe = "MATHS-PHYS-SI";
        }

        if ($spe == "m_p_s") {
            $spe = "MATHS-PHYS-SVT";
        }

        if ($spe == "sp_es_lv") {
            $spe = "SPO-SES-LV et CULT ANGLAIS";
        }

        if ($spe == "sp_h_es") {
            $spe = "SPO-HUMANITES-SES";
        }

        return view('affiche_profil', [
            'utilisateurs' => $utilisateurs,
            'profils' => $profils,
            'specialite' => $spe,
        ]);
    }
}