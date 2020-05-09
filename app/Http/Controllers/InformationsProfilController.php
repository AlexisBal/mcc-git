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

        if ($moyennemaths == "0-5") {
            $moyennemaths = "Entre 0 et 5";
        }

        if ($moyennemaths == "5-8") {
            $moyennemaths = "Entre 5 et 8";
        }

        if ($moyennemaths == "8-10") {
            $moyennemaths = "Entre 8 et 10";
        }

        if ($moyennemaths == "10-12") {
            $moyennemaths = "Entre 10 et 12";
        }

        if ($moyennemaths == "12-14") {
            $moyennemaths = "Entre 12 et 14";
        }

        if ($moyennemaths == "14-16") {
            $moyennemaths = "Entre 14 et 16";
        }

        if ($moyennemaths == "16-18") {
            $moyennemaths = "Entre 16 et 18";
        }

        if ($moyennemaths == "18-20") {
            $moyennemaths = "Entre 18 et 20";
        }

        if ($moyennephysique == "0-5") {
            $moyennephysique = "Entre 0 et 5";
        }

        if ($moyennephysique == "5-8") {
            $moyennephysique = "Entre 5 et 8";
        }

        if ($moyennephysique == "8-10") {
            $moyennephysique = "Entre 8 et 10";
        }

        if ($moyennephysique == "10-12") {
            $moyennephysique = "Entre 10 et 12";
        }

        if ($moyennephysique == "12-14") {
            $moyennephysique = "Entre 12 et 14";
        }

        if ($moyennephysique == "14-16") {
            $moyennephysique = "Entre 14 et 16";
        }

        if ($moyennephysique == "16-18") {
            $moyennephysique = "Entre 16 et 18";
        }

        if ($moyennephysique == "18-20") {
            $moyennephysique = "Entre 18 et 20";
        }

        if ($moyennesvt == "0-5") {
            $moyennesvt = "Entre 0 et 5";
        }

        if ($moyennesvt == "5-8") {
            $moyennesvt = "Entre 5 et 8";
        }

        if ($moyennesvt == "8-10") {
            $moyennesvt = "Entre 8 et 10";
        }

        if ($moyennesvt == "10-12") {
            $moyennesvt = "Entre 10 et 12";
        }

        if ($moyennesvt == "12-14") {
            $moyennesvt = "Entre 12 et 14";
        }

        if ($moyennesvt == "14-16") {
            $moyennesvt = "Entre 14 et 16";
        }

        if ($moyennesvt == "16-18") {
            $moyennesvt = "Entre 16 et 18";
        }

        if ($moyennesvt == "18-20") {
            $moyennesvt = "Entre 18 et 20";
        }

        if ($moyennesi == "0-5") {
            $moyennesi = "Entre 0 et 5";
        }

        if ($moyennesi == "5-8") {
            $moyennesi = "Entre 5 et 8";
        }

        if ($moyennesi == "8-10") {
            $moyennesi = "Entre 8 et 10";
        }

        if ($moyennesi == "10-12") {
            $moyennesi = "Entre 10 et 12";
        }

        if ($moyennesi == "12-14") {
            $moyennesi = "Entre 12 et 14";
        }

        if ($moyennesi == "14-16") {
            $moyennesi = "Entre 14 et 16";
        }

        if ($moyennesi == "16-18") {
            $moyennesi = "Entre 16 et 18";
        }

        if ($moyennesi == "18-20") {
            $moyennesi = "Entre 18 et 20";
        }

        if ($moyenneeco == "0-5") {
            $moyenneeco = "Entre 0 et 5";
        }

        if ($moyenneeco == "5-8") {
            $moyenneeco = "Entre 5 et 8";
        }

        if ($moyenneeco == "8-10") {
            $moyenneeco = "Entre 8 et 10";
        }

        if ($moyenneeco == "10-12") {
            $moyenneeco = "Entre 10 et 12";
        }

        if ($moyenneeco == "12-14") {
            $moyenneeco = "Entre 12 et 14";
        }

        if ($moyenneeco == "14-16") {
            $moyenneeco = "Entre 14 et 16";
        }

        if ($moyenneeco == "16-18") {
            $moyenneeco = "Entre 16 et 18";
        }

        if ($moyenneeco == "18-20") {
            $moyenneeco = "Entre 18 et 20";
        }

        if ($moyennefrancais == "0-5") {
            $moyennefrancais = "Entre 0 et 5";
        }

        if ($moyennefrancais == "5-8") {
            $moyennefrancais = "Entre 5 et 8";
        }

        if ($moyennefrancais == "8-10") {
            $moyennefrancais = "Entre 8 et 10";
        }

        if ($moyennefrancais == "10-12") {
            $moyennefrancais = "Entre 10 et 12";
        }

        if ($moyennefrancais == "12-14") {
            $moyennefrancais = "Entre 12 et 14";
        }

        if ($moyennefrancais == "14-16") {
            $moyennefrancais = "Entre 14 et 16";
        }

        if ($moyennefrancais == "16-18") {
            $moyennefrancais = "Entre 16 et 18";
        }

        if ($moyennefrancais == "18-20") {
            $moyennefrancais = "Entre 18 et 20";
        }

        if ($moyenneanglais == "0-5") {
            $moyenneanglais = "Entre 0 et 5";
        }

        if ($moyenneanglais == "5-8") {
            $moyenneanglais = "Entre 5 et 8";
        }

        if ($moyenneanglais == "8-10") {
            $moyenneanglais = "Entre 8 et 10";
        }

        if ($moyenneanglais == "10-12") {
            $moyenneanglais = "Entre 10 et 12";
        }

        if ($moyenneanglais == "12-14") {
            $moyenneanglais = "Entre 12 et 14";
        }

        if ($moyenneanglais == "14-16") {
            $moyenneanglais = "Entre 14 et 16";
        }

        if ($moyenneanglais == "16-18") {
            $moyenneanglais = "Entre 16 et 18";
        }

        if ($moyenneanglais == "18-20") {
            $moyenneanglais = "Entre 18 et 20";
        }

        if ($moyennephilo == "0-5") {
            $moyennephilo = "Entre 0 et 5";
        }

        if ($moyennephilo == "5-8") {
            $moyennephilo = "Entre 5 et 8";
        }

        if ($moyennephilo == "8-10") {
            $moyennephilo = "Entre 8 et 10";
        }

        if ($moyennephilo == "10-12") {
            $moyennephilo = "Entre 10 et 12";
        }

        if ($moyennephilo == "12-14") {
            $moyennephilo = "Entre 12 et 14";
        }

        if ($moyennephilo == "14-16") {
            $moyennephilo = "Entre 14 et 16";
        }

        if ($moyennephilo == "16-18") {
            $moyennephilo = "Entre 16 et 18";
        }

        if ($moyennephilo == "18-20") {
            $moyennephilo = "Entre 18 et 20";
        }
       
        
		return view('mes-informations',[
            'specialite' => $spe,
            'profileleve' => $type,
            'matieresfav' => $matieresfav,
            'matieresdet' => $matieresdet,
            'methodes' => $methodes,
            'maths' => $moyennemaths,
            'physique' => $moyennephysique,
            'svt' => $moyennesvt,
            'si' => $moyennesi,
            'eco' => $moyenneeco,
            'francais' => $moyennefrancais,
            'philosophie' => $moyennephilo,
            'anglais' => $moyenneanglais,
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
