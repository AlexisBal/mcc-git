<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class InformationsProfilController extends Controller
{
    public function formulaire_part1()
    {   
        $spe = request()->old('specialite');

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
            'specialite' => $spe,
        ]);
    }
    
    public function formulaire_part2()
    {   
		return view('mes-informations-2');
    }

    public function formulaire_part3()
    {   
		return view('mes-informations-3');
    }
    
    public function traitement_part1()
    {   
        request()->validate([ 
			'niveauetude' => ['required', 'string', 'max:255'],
			'specialite' => ['required', 'string', 'max:255'],
            'lv1' => ['required', 'string', 'max:255'],
            'profileleve' => ['required', 'string', 'max:255'],
            'ambiancetravail' => ['required', 'string', 'max:255'],
            'tempstravail' => ['required', 'string', 'max:255'],
            'methodes' => ['required', 'string', 'max:255'],
            'matieresfav' => ['required', 'string', 'max:255'],
            'maths' => ['required', 'string', 'max:255'],
            'physique' => ['required', 'string', 'max:255'],
            'svt' => ['required', 'string', 'max:255'],
            'si' => ['required', 'string', 'max:255'],
            'eco' => ['required', 'string', 'max:255'],
            'francais' => ['required', 'string', 'max:255'],
            'philosophie' => ['required', 'string', 'max:255'], 
            'anglais' => ['required', 'string', 'max:255'],
        ]);
        
        $utilisateurs = Utilisateur::where('id', '=',Auth::user()->id)->first();
        $id = $utilisateurs->id;

        $profil = Profil::create([
            'user_id' => $id,
            'niveauetude' => request('niveauetude'),
            'specialite' => request('specialite'),
            'lv1' => request('lv1'),
            'profileleve' => request('profileleve'),
            'ambiancetravail' => request('ambiancetravail'),
            'tempstravail' => request('tempstravail'),
            'methodes' => request('methodes'),
            'matieresfav' => request('matieresfav'),
            'maths' => request('maths'),
            'physique' => request('physique'),
            'svt' => request('svt'),
            'si' => request('si'),
            'eco' => request('eco'),
            'francais' => request('francais'),
            'philosophie' => request('philosophie'),
            'anglais' => request('anglais'),
        ]);
        
        return redirect('/mes-informations-suite'); 
    }
    
	public function traitement_part2()
    {   
        request()->validate([ 
			'qualite1' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite3', 'different:qualite4', 'different:qualite5'],
			'qualite2' => ['required', 'string', 'max:255', 'different:qualite1','different:qualite3', 'different:qualite4', 'different:qualite5'],
			'qualite3' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite1', 'different:qualite4', 'different:qualite5'],
            'qualite4' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite3', 'different:qualite1', 'different:qualite5'],
			'qualite5' => ['required', 'string', 'max:255', 'different:qualite2','different:qualite3', 'different:qualite4', 'different:qualite1'],
			'defaut1' => ['required', 'string', 'max:255', 'different:defaut2','different:defaut3'],
			'defaut2' => ['required', 'string', 'max:255', 'different:defaut3','different:defaut1'],
            'defaut3' => ['required', 'string', 'max:255', 'different:defaut1','different:defaut2'],
            'raison' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            'hobbies' => ['required', 'string', 'max:255'],
            'domaines' => ['required', 'string', 'max:255'],
            'domainespe' => ['required', 'string', 'max:255'],
        ]);
        
        $profil = Profil::where('user_id', '=',Auth::user()->id)->create([
            'qualite1' => request('qualite1'),
            'qualite2' => request('qualite2'),
            'qualite3' => request('qualite3'),
            'qualite4' => request('qualite4'),
            'qualite5' => request('qualite5'),
            'defaut1' => request('defaut1'),
            'defaut2' => request('defaut2'),
            'defaut3' => request('defaut3'),
            'raison' => request('raison'),
            'detail' => request('detail'),
            'hobbies' => request('hobbies'),
            'domaines' => request('domaines'),
            'domainespe' => request('domainespe'),
        ]);

        {

            return redirect('/mes-informations-fin');
        }
    }
    
    public function traitement_part3()
    {   
        request()->validate([ 
			'metiers' => ['required', 'string', 'max:255'], 
            'metierspe' => ['required', 'string', 'max:255'],
            'situation' => ['required', 'string', 'max:255'],
            'salaire' => ['required', 'string', 'max:255'],
            'projet' => ['required', 'string', 'max:255'],
            'equipe' => ['required', 'string', 'max:255'],
            'stress' => ['required', 'string', 'max:255'],
            'international' => ['required', 'string', 'max:255'],
            'admission' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'string', 'max:255'],
            'formations' => ['required', 'string', 'max:255'],
            'formationspe' => ['required', 'string', 'max:255'],
        ]);
        
        $profil = Profil::where('user_id', '=',Auth::user()->id)->create([
            'metiers' => request('metiers'),
            'metierspe' => request('metierspe'),
            'situation' => request('situation'),
            'salaire' => request('salaire'),
            'projet' => request('projet'),
            'equipe' => request('equipe'),
            'stress' => request('stress'),
            'international' => request('international'),
            'admission' => request('admission'),
            'prix' => request('prix'),
            'formations' => request('formations'),
            'formationspe' => request('formationspe'),
        ]);

        {
            flash("Bravo, votre inscription est terminée !")->success();

            return redirect('/mon-compte');
        }
	}
}
