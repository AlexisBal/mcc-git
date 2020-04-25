<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Requests;

class InformationsProfilController extends Controller
{
    public function formulaire()
    {   
        $nvetude = request()->old('niveauetude');
        $spe = request()->old('specialite');

        if ($nvetude == "premiere") {
            $nvetude = "Première";
        }

        if ($nvetude == "terminale") {
            $nvetude = "Terminale";
        }

        if ($nvetude == "seconde") {
            $nvetude = "Seconde";
        }

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
        
		return view('mes-informations',[
            'niveauetude' => $nvetude,
            'specialite' => $spe,
        ]);
	}

	public function traitement()
    {   
        request()->validate([
			'niveauetude' => ['required', 'string', 'max:255'],
			'specialite' => ['required', 'string', 'max:255'],
			'qualite1' => ['required', 'string', 'max:255'],
			'qualite2' => ['required', 'string', 'max:255'],
			'qualite3' => ['required', 'string', 'max:255'],
			'qualite4' => ['required', 'string', 'max:255'],
			'qualite5' => ['required', 'string', 'max:255'],
			'defaut1' => ['required', 'string', 'max:255'],
			'defaut2' => ['required', 'string', 'max:255'],
			'defaut3' => ['required', 'string', 'max:255'],
        ]);
        
        $profil = Profil::create([
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
            flash("Bravo, votre inscription est terminée !")->success();

            return redirect('/mon-compte');
        }
	}
}
