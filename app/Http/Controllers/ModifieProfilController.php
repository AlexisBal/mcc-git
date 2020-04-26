<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Profil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class ModifieProfilController extends Controller
{
    public function afficher()
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
        
		return view('modifie_profil',[
            'utilisateurs' => $utilisateurs,
            'profils' => $profils,
            'specialite' => $spe,
        ]);
	}

	public function modifier()
    {   
        request()->validate([
			'niveauetude' => ['required', 'string', 'max:255'],
			'specialite' => ['required', 'string', 'max:255'],
			'qualite1' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite3', 'different:qualite4', 'different:qualite5'],
			'qualite2' => ['required', 'string', 'max:255', 'different:qualite1','different:qualite3', 'different:qualite4', 'different:qualite5'],
			'qualite3' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite1', 'different:qualite4', 'different:qualite5'],
            'qualite4' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite3', 'different:qualite1', 'different:qualite5'],
			'qualite5' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite3', 'different:qualite4', 'different:qualite1'],
			'defaut1' => ['required', 'string', 'max:255', 'different:defaut2','different:defaut3'],
			'defaut2' => ['required', 'string', 'max:255', 'different:defaut3','different:defaut1'],
			'defaut3' => ['required', 'string', 'max:255', 'different:defaut1','different:defaut2'],
        ]);

        $utilisateurs = Utilisateur::where('id', '=',Auth::user()->id)->first();
        $id = $utilisateurs->id;
        $profilmodifie = Profil::where('user_id', '=',Auth::user()->id)->update([
            'user_id' => $id,
            'niveauetude' => request('niveauetude'),
            'specialite' => request('specialite'),
            'qualite1' => request('qualite1'),
            'qualite2' => request('qualite2'),
            'qualite3' => request('qualite3'),
            'qualite4' => request('qualite4'),
            'qualite5' => request('qualite5'),
            'defaut1' => request('defaut1'),
            'defaut2' => request('defaut2'),
            'defaut3' => request('defaut3'),
        ]);

        {
            flash("Vos modifications ont été prises en compte !")->success();

            return redirect('/profil');
        }
	}
}
