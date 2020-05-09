@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <form action="/mes-informations" name="information_profil" method="post">
        @csrf
         
        <div class="form-group">
         <div class="col-auto">
          <label for="niveauetude">Niveau d'études</label>
          <select class="form-control @error('niveauetude') is-invalid @enderror" id="niveauetude"  name="niveauetude">
              <option value="{{ old('niveauetude') }}">{{ old('niveauetude') }}</option>
              <option value="Seconde">Seconde</option>
              <option value="Premiere">Première</option>
              <option value="Terminale">Terminale</option>
          </select>
          @error('niveauetude')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>
        
        <div class="form-group" id="champspe" style="display:none">
         <div class="col-auto">
          <label for="specialite">Spécialités choisies</label>
          <select class="form-control @error('specialite') is-invalid @enderror" id="specialite" name="specialite">
              <option value="{{ old('specialite') }}">{{ $specialite }}</option>
              <option value="m_es_h">MATHS-SES-HUMANITES</option>
              <option value="m_s_h">MATHS-SVT-HUMANITES</option>
              <option value="m_p_sp">MATHS-PHYS-SPO</option>
              <option value="m_es_s">MATHS-SES-SVT</option>
              <option value="m_es_p">MATHS-SES-PHYS</option>
              <option value="m_p_lv">MATHS-PHYS-LV et CULT ANGLAIS</option>
              <option value="m_es_lv">MATHS-SES-LV et CULT ANGLAIS</option>
              <option value="m_es_sp">MATHS-SES-SPO</option>
              <option value="m_p_si">MATHS-PHYS-SI</option>
              <option value="m_p_s">MATHS-PHYS-SVT</option>
              <option value="sp_es_lv">SPO-SES-LV et CULT ANGLAIS</option>
              <option value="sp_h_es">SPO-HUMANITES-SES</option>
          </select>
          @error('specialite')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champlv1" style="display:none">
         <div class="col-auto">
          <label for="lv1">LV1</label>
          <select class="form-control @error('lv1') is-invalid @enderror" id="lv1" name="lv1">
              <option value="{{ old('lv1') }}">{{ old('lv1') }}</option>
              <option value="Anglais">Anglais</option>
              <option value="Allemand">Allemand</option>
              <option value="Espagnol">Espagnol</option>
              <option value="Chinois">Chinois</option>
              <option value="Japonais">Japonais</option>
          </select>
          @error('lv1')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champprofileleve" style="display:none">
         <div class="col-auto">
          <label for="profileleve">Quel type d'élève es-tu ?</label>
          <select class="form-control @error('profileleve') is-invalid @enderror" id="profileleve" name="profileleve">
              <option value="{{ old('profileleve') }}">{{ $profileleve }}</option>
              <option value="S_T_T">Sérieux, travailleur mais timide</option>
              <option value="S_T_B">Sérieux, travailleur mais bavard</option>
              <option value="F_T">Possède des facilités et travaille</option>
              <option value="F_NT">Possède des facilités mais ne travaille pas</option>
              <option value="S_T_T">N'est pas motivé et ne travaille pas</option>
          </select>
          @error('profileleve')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champambiancetravail" style="display:none">
         <div class="col-auto">
          <label for="ambiancetravail">Pour toi, une bonne ambiance de travail, c’est ... </label>
          <select class="form-control @error('ambiancetravail') is-invalid @enderror" id="ambiancetravail" name="ambiancetravail">
              <option value="{{ old('ambiancetravail') }}">{{ old('ambiancetravail') }}</option>
              <option value="calme">Du calme, du calme et encore du calme</option>
              <option value="musique">Ecouter son album préféré</option>
              <option value="tv">Travailler devant la télé</option>
              <option value="tel">Travailler avec son téléphone à proximité</option>
          </select>
          @error('ambiancetravail')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champtempstravailsemaine" style="display:none">
         <div class="col-auto">
          <label for="tempstravailsemaine">Ton temps de travail personnel en semaine</label>
          <select class="form-control @error('tempstravailsemaine') is-invalid @enderror" id="tempstravailsemaine" name="tempstravailsemaine">
              <option value="{{ old('tempstravailsemaine') }}">{{ old('tempstravailsemaine') }}</option>
              <option value="30min">30min par soir</option>
              <option value="1h">1h par soir</option>
              <option value="1h30">1h30 par soir</option>
              <option value="2h">2h par soir</option>
              <option value="2h30">2h30 par soir</option>
              <option value="3h">3h par soir</option>
              <option value="3h30">3h30 par soir</option>
              <option value="4h">4h par soir</option>
              <option value="Plus">Plus de 4h par soir</option>
          </select>
          @error('tempstravailsemaine')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champtempstravailwe" style="display:none">
         <div class="col-auto">
          <label for="tempstravailwe">Ton temps de travail personnel le weekend</label>
          <select class="form-control @error('tempstravailwe') is-invalid @enderror" id="tempstravailwe" name="tempstravailwe">
              <option value="{{ old('tempstravailwe') }}">{{ old('tempstravailwe') }}</option>
              <option value="30min">30min</option>
              <option value="1h">1h</option>
              <option value="2h">2h</option>
              <option value="3h">3h</option>
              <option value="4h">4h</option>
              <option value="5h">5h</option>
              <option value="6h">6h</option>
              <option value="7h">7h</option>
              <option value="8h">8h</option>
              <option value="10h">10h</option>
              <option value="Plus">Plus de 10h</option>
          </select>
          @error('tempstravailwe')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champmethodes" style="display:none">
         <div class="col-auto">
          <label for="methodes">Quels sont tes méthodes de travail ?</label>
          <select class="form-control @error('methodes') is-invalid @enderror" id="methodes" name="methodes">
              <option value="{{ old('methodes') }}">{{ $methodes }}</option>
              <option value="F_R">Je fais des fiches et travaille mes cours tous les soirs</option>
              <option value="F_NR">Je fais des fiches mais ne travaille pas mes cours tous les soirs</option>
              <option value="NF_R">Je ne fais pas de fiches mais travaille mes cours tous les soirs</option>
              <option value="NF_NR">Je ne fais pas de fiches et ne travaille pas mes cours tous les soirs</option>
          </select>
          @error('methodes')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champmatieresfav" style="display:none">
         <div class="col-auto">
          <label for="matieresfav">Quelles sont tes 2 matières favorites ?</label>
          <select class="form-control @error('matieresfav') is-invalid @enderror" id="matieresfav" name="matieresfav">
              <option value="{{ old('matieresfav') }}">{{ $matieresfav }}</option>
              <option value="M_P">Maths - Physique</option>
              <option value="M_SI">Maths - SI</option>
              <option value="M_S">Maths - SVT</option>
              <option value="M_F">Maths - Francais</option>
              <option value="M_H">Maths - Philosophie</option>
              <option value="M_E">Maths - Eco</option>
              <option value="M_LV1">Maths - LV1</option>
              <option value="M_LV2">Maths - LV2</option>
              <option value="P_SI">Physique - SI</option>
              <option value="P_SVT">Physique - SVT</option>
              <option value="P_F">Physique - Francais</option>
              <option value="P_H">Physique - Philosophie</option>
              <option value="P_E">Physique - Eco</option>
              <option value="P_LV1">Physique - LV1</option>
              <option value="P_LV2">Physique - LV2</option>
              <option value="S_F">SVT - Francais</option>
              <option value="S_H">SVT - Philosophie</option>
              <option value="S_E">SVT - Eco</option>
              <option value="S_LV1">SVT - LV1</option>
              <option value="S_LV2">SVT - LV2</option>
              <option value="SI_F">SI - Francais</option>
              <option value="SI_H">SI - Philosophie</option>
              <option value="SI_E">SI - Eco</option>
              <option value="SI_LV1">SI - LV1</option>
              <option value="SI_LV2">SI - LV2</option>
              <option value="F_E">Français - Eco</option>
              <option value="F_H">Français - Philosophie</option>
              <option value="F_LV1">Français - LV1</option>
              <option value="F_LV2">Français - LV2</option>
              <option value="E_H">Eco - Philosophie</option>
              <option value="E_LV1">Eco - LV1</option>
              <option value="E_LV2">Eco - LV2</option>
              <option value="LV1_H">LV1 - Philosophie</option>
              <option value="LV2_H">LV2 - Philosophie</option>
              <option value="LV1_LV2">LV1 - LV2</option>
          </select>
          @error('matieresfav')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champmatieresdet" style="display:none">
         <div class="col-auto">
          <label for="matieresdet">Une matière que tu détestes ?</label>
          <select class="form-control @error('matieresdet') is-invalid @enderror" id="matieresdet" name="matieresdet">
              <option value="{{ old('matieresdet') }}">{{ $matieresdet }}</option>
              <option value="aucune">Aucune</option>
              <option value="M">Maths</option>
              <option value="P">Physique</option>
              <option value="SVT">SVT</option>
              <option value="SI">SI</option>
              <option value="F">Français</option>
              <option value="H">Philosophie</option>
              <option value="E">Eco</option>
              <option value="LV1">LV1</option>
              <option value="LV2">LV2</option>
          </select>
          @error('matieresdet')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champmaths" style="display:none">
         <div class="col-auto">
          <label for="maths">Ta moyenne en Maths</label>
          <select class="form-control @error('maths') is-invalid @enderror" id="maths" name="maths" value="{{ old('maths') }}">
              <option value="{{ old('maths') }}">{{ $maths }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('maths')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champphysique" style="display:none">
         <div class="col-auto">
          <label for="physique">Ta moyenne en Physique</label>
          <select class="form-control @error('physique') is-invalid @enderror" value="{{ old('physique') }}" id="physique" name="physique">
              <option value="{{ old('physique') }}">{{ $physique }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('physique')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champsvt" style="display:none">
         <div class="col-auto">
          <label for="svt">Ta moyenne en SVT</label>
          <select class="form-control @error('svt') is-invalid @enderror" value="{{ old('svt') }}" id="svt" name="svt">
              <option value="{{ old('svt') }}">{{ $svt }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('svt')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champsi" style="display:none">
         <div class="col-auto">
          <label for="si">Ta moyenne en SI</label>
          <select class="form-control @error('si') is-invalid @enderror" value="{{ old('si') }}" id="si" name="si">
              <option value="{{ old('si') }}">{{ $si }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('si')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champeco" style="display:none">
         <div class="col-auto">
          <label for="eco">Ta moyenne en Economie</label> 
          <select class="form-control @error('eco') is-invalid @enderror" value="{{ old('eco') }}" id="eco" name="eco">
              <option value="{{ old('eco') }}">{{ $eco }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('eco')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champfrancais" style="display:none">
         <div class="col-auto">
          <label for="francais">Ta moyenne en Français</label>
          <select class="form-control @error('francais') is-invalid @enderror" value="{{ old('francais') }}" id="francais" name="francais">
              <option value="{{ old('francais') }}">{{ $francais }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('francais')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champphilosophie" style="display:none">
         <div class="col-auto">
          <label for="philosophie">Ta moyenne en Philosophie</label>
          <select class="form-control @error('philosophie') is-invalid @enderror" id="philosophie" name="philosophie">
              <option value="{{ old('philosophie') }}">{{ $philosophie }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('philosophie')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champanglais" style="display:none">
         <div class="col-auto">
          <label for="anglais">Ta moyenne en Anglais</label>
          <select class="form-control @error('anglais') is-invalid @enderror" id="anglais" name="anglais">
              <option value="{{ old('anglais') }}">{{ $anglais }}</option>
              <option value="0-5">Entre 0 et 5</option>
              <option value="5-8">Entre 5 et 8</option>
              <option value="8-10">Entre 8 et 10</option>
              <option value="10-12">Entre 10 et 12</option>
              <option value="12-14">Entre 12 et 14</option>
              <option value="14-16">Entre 14 et 16</option>
              <option value="16-18">Entre 16 et 18</option>
              <option value="18-20">Entre 18 et 20</option>
          </select>
          @error('anglais')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>
        
        <div class="col-auto" style="display:none" id="champ_bouton_profil_1">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Valider les informations</button>
            </div>
        </div>
    </form>
@endsection      