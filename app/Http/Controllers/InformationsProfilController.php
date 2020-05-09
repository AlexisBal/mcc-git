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
        $type = request()->old('profileleve');
        $methodes = request()->old('methodes');
        $matieresfav = request()->old('matieresfav');
        $matieresdet = request()->old('matieresdet');
        $moyennemaths = request()->old('maths');
        $moyennephysique = request()->old('physique');
        $moyennesvt = request()->old('svt');
        $moyennesi = request()->old('si');
        $moyenneeco = request()->old('eco');
        $moyenneanglais = request()->old('anglais');
        $moyennefrancais = request()->old('francais');
        $moyennephilo = request()->old('philosophie');

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

        if ($type == "S_T_T") {
            $type = "Sérieux, travailleur mais timide";
        }

        if ($type == "S_T_B") {
            $type = "Sérieux, travailleur mais bavard";
        }

        if ($type == "F_T") {
            $type = "Possède des facilités et travaille";
        }

        if ($type == "F_NT") {
            $type = "Possède des facilités mais ne travaille pas";
        }

        if ($type == "S_T_T") {
            $type = "N'est pas motivé et ne travaille pas";
        }

        if ($methodes == "F_R") {
            $methodes = "Je fais des fiches et travaille mes cours tous les soirs";
        }

        if ($methodes == "F_NR") {
            $methodes = "Je fais des fiches mais ne travaille pas mes cours tous les soirs";
        }

        if ($methodes == "NF_R") {
            $methodes = "Je ne fais pas de fiches mais travaille mes cours tous les soirs";
        }

        if ($methodes == "NF_NR") {
            $methodes = "Je ne fais pas de fiches et ne travaille pas mes cours tous les soirs";
        }

        if ($matieresfav == "M_P") {
            $matieresfav = "Maths - Physique";
        }

        if ($matieresfav == "LV1_H") {
            $matieresfav = "LV1 - Philosophie";
        }

        if ($matieresfav == "LV2_H") {
            $matieresfav = "LV2 - Philosophie";
        }

        if ($matieresfav == "LV1_LV2") {
            $matieresfav = "LV1 - LV2";
        }
        
        if ($matieresfav == "E_LV2") {
            $matieresfav = "Eco - LV2";
        }

        if ($matieresfav == "E_LV1") {
            $matieresfav = "Eco - LV1";
        }

        if ($matieresfav == "E_H") {
            $matieresfav = "Eco - Philosophie";
        }

        if ($matieresfav == "F_LV2") {
            $matieresfav = "Français - LV2";
        }

        if ($matieresfav == "F_LV1") {
            $matieresfav = "Français - LV1";
        }

        if ($matieresfav == "F_H") {
            $matieresfav = "Français - Philosophie";
        }

        if ($matieresfav == "F_E") {
            $matieresfav = "Français - Eco";
        }

        if ($matieresfav == "SI_LV2") {
            $matieresfav = "SI - LV2";
        }

        if ($matieresfav == "SI_LV1") {
            $matieresfav = "SI - LV1";
        }

        if ($matieresfav == "SI_E") {
            $matieresfav = "SI - Eco";
        }

        if ($matieresfav == "SI_H") {
            $matieresfav = "SI - Philosophie";
        }

        if ($matieresfav == "SI_F") {
            $matieresfav = "SI - Francais";
        }

        if ($matieresfav == "S_LV2") {
            $matieresfav = "SVT - LV2";
        }

        if ($matieresfav == "S_LV1") {
            $matieresfav = "SVT - LV1";
        }

        if ($matieresfav == "S_E") {
            $matieresfav = "SVT - Eco";
        }

        if ($matieresfav == "S_H") {
            $matieresfav = "SVT - Philosophie";
        }

        if ($matieresfav == "S_F") {
            $matieresfav = "SVT - Francais";
        }

        if ($matieresfav == "P_LV1") {
            $matieresfav = "Physique - LV1";
        }

        if ($matieresfav == "P_LV2") {
            $matieresfav = "Physique - LV2";
        }

        if ($matieresfav == "P_E") {
            $matieresfav = "Physique - Eco";
        }

        if ($matieresfav == "P_H") {
            $matieresfav = "Physique - Philosophie";
        }

        if ($matieresfav == "P_F") {
            $matieresfav = "Physique - Francais";
        }

        if ($matieresfav == "P_S") {
            $matieresfav = "Physique - SVT";
        }

        if ($matieresfav == "P_SI") {
            $matieresfav = "Physique - SI";
        }

        if ($matieresfav == "M_LV2") {
            $matieresfav = "Maths - LV2";
        }

        if ($matieresfav == "M_LV1") {
            $matieresfav = "Maths - LV1";
        }

        if ($matieresfav == "M_E") {
            $matieresfav = "Maths - Eco";
        }

        if ($matieresfav == "M_H") {
            $matieresfav = "Maths - Philosophie";
        }

        if ($matieresfav == "M_F") {
            $matieresfav = "Maths - Francais";
        }

        if ($matieresfav == "M_S") {
            $matieresfav = "Maths - SVT";
        }

        if ($matieresfav == "M_SI") {
            $matieresfav = "Maths - SI";
        }

        if ($matieresdet == "aucune") {
            $matieresdet = "Aucune";
        }

        if ($matieresdet == "P") {
            $matieresdet = "Physique";
        }

        if ($matieresdet == "M") {
            $matieresdet = "Maths";
        }

        if ($matieresdet == "S") {
            $matieresdet = "SVT";
        }

        if ($matieresdet == "F") {
            $matieresdet = "Francais";
        }

        if ($matieresdet == "H") {
            $matieresdet = "Philosophie";
        }

        if ($matieresdet == "E") {
            $matieresdet = "Economie";
        }

		return view('mes-informations',[
            'specialite' => $spe,
            'profileleve' => $type,
            'matieresfav' => $matieresfav,
            'matieresdet' => $matieresdet,
            'methodes' => $methodes,
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
            'tempstravailsemaine' => ['required', 'string', 'max:255'],
            'tempstravailwe' => ['required', 'string', 'max:255'],
            'methodes' => ['required', 'string', 'max:255'],
            'matieresfav' => ['required', 'string', 'max:255'],
            'matieresdet' => ['required', 'string', 'max:255'],
            'maths' => ['required', 'numeric'],
            'physique' => ['required', 'numeric'],
            'svt' => ['required', 'numeric'],
            'si' => ['required', 'numeric'],
            'eco' => ['required', 'numeric'],
            'francais' => ['required', 'numeric'],
            'philosophie' => ['required', 'numeric'],
            'anglais' =>['required', 'numeric'],
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
            'tempstravailsemaine' => request('tempstravailsemaine'),
            'tempstravailwe' => request('tempstravailwe'),
            'methodes' => request('methodes'),
            'matieresfav' => request('matieresfav'),
            'matieresdet' => request('matieresdet'),
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
