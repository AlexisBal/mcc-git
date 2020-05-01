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

        <div class="form-group" id="champqualite1" style="display:none">
         <div class="col-auto">
          <label for="qualite1">Qualité 1</label>
          <select class="form-control @error('qualite1') is-invalid @enderror" id="qualite1" name="qualite1">
              <option value="{{ old('qualite1') }}">{{ old('qualite1') }}</option>
              <option value="Analytique">Analytique</option>
              <option value="Ambitieux">Ambitieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Charismatique">Charismatique</option>
              <option value="Communicatif">Communicatif</option>
              <option value="Constructif">Constructif</option>
              <option value="Convaincant">Convaincant</option>
              <option value="Cooperatif">Coopératif</option>
              <option value="Courageux">Courageux</option>
              <option value="Creatif">Créatif</option>
              <option value="Curieux">Curieux</option>
              <option value="Diplomate">Diplomate</option>
              <option value="Dynamique">Dynamique</option>
              <option value="Efficace">Efficace</option>
              <option value="Fiable">Fiable</option>
              <option value="Flexible">Flexible</option>
              <option value="Honnete">Honnête</option>
              <option value="Independant">Indépendant</option>
              <option value="Inventif">Inventif</option>
              <option value="Leader">Leader</option>
              <option value="Loyal">Loyal</option>
              <option value="Minutieux">Minutieux</option>
              <option value="Observateur">Observateur</option>
              <option value="Optimiste">Optimiste</option>
              <option value="Organise">Organisé</option>
              <option value="Ouvert d’esprit">Ouvert d’esprit</option>
              <option value="Passionne">Passionné</option>
              <option value="Perfectionniste">Perfectionniste</option>
              <option value="Polyvalent">Polyvalent</option>
              <option value="Reflechi">Réfléchi</option>
              <option value="Rigoureux">Rigoureux</option>
              <option value="Soigneux">Soigneux</option>
              <option value="Souriant">Souriant</option>
              <option value="Travailleur">Travailleur</option>
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('qualite1')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champqualite2" style="display:none">
         <div class="col-auto">
          <label for="qualite2">Qualité 2</label>
          <select class="form-control @error('qualite2') is-invalid @enderror" id="qualite2" name="qualite2">
              <option value="{{ old('qualite2') }}">{{ old('qualite2') }}</option>
              <option value="Analytique">Analytique</option>
              <option value="Ambitieux">Ambitieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Charismatique">Charismatique</option>
              <option value="Communicatif">Communicatif</option>
              <option value="Constructif">Constructif</option>
              <option value="Convaincant">Convaincant</option>
              <option value="Cooperatif">Coopératif</option>
              <option value="Courageux">Courageux</option>
              <option value="Creatif">Créatif</option>
              <option value="Curieux">Curieux</option>
              <option value="Diplomate">Diplomate</option>
              <option value="Dynamique">Dynamique</option>
              <option value="Efficace">Efficace</option>
              <option value="Fiable">Fiable</option>
              <option value="Flexible">Flexible</option>
              <option value="Honnete">Honnête</option>
              <option value="Independant">Indépendant</option>
              <option value="Inventif">Inventif</option>
              <option value="Leader">Leader</option>
              <option value="Loyal">Loyal</option>
              <option value="Minutieux">Minutieux</option>
              <option value="Observateur">Observateur</option>
              <option value="Optimiste">Optimiste</option>
              <option value="Organise">Organisé</option>
              <option value="Ouvert d’esprit">Ouvert d’esprit</option>
              <option value="Passionne">Passionné</option>
              <option value="Perfectionniste">Perfectionniste</option>
              <option value="Polyvalent">Polyvalent</option>
              <option value="Reflechi">Réfléchi</option>
              <option value="Rigoureux">Rigoureux</option>
              <option value="Soigneux">Soigneux</option>
              <option value="Souriant">Souriant</option>
              <option value="Travailleur">Travailleur</option>
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('qualite2')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champqualite3" style="display:none">
         <div class="col-auto">
          <label for="qualite3">Qualité 3</label>
          <select class="form-control @error('qualite3') is-invalid @enderror" id="qualite3" name="qualite3">
              <option value="{{ old('qualite3') }}">{{ old('qualite3') }}</option>
              <option value="Analytique">Analytique</option>
              <option value="Ambitieux">Ambitieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Charismatique">Charismatique</option>
              <option value="Communicatif">Communicatif</option>
              <option value="Constructif">Constructif</option>
              <option value="Convaincant">Convaincant</option>
              <option value="Cooperatif">Coopératif</option>
              <option value="Courageux">Courageux</option>
              <option value="Creatif">Créatif</option>
              <option value="Curieux">Curieux</option>
              <option value="Diplomate">Diplomate</option>
              <option value="Dynamique">Dynamique</option>
              <option value="Efficace">Efficace</option>
              <option value="Fiable">Fiable</option>
              <option value="Flexible">Flexible</option>
              <option value="Honnete">Honnête</option>
              <option value="Independant">Indépendant</option>
              <option value="Inventif">Inventif</option>
              <option value="Leader">Leader</option>
              <option value="Loyal">Loyal</option>
              <option value="Minutieux">Minutieux</option>
              <option value="Observateur">Observateur</option>
              <option value="Optimiste">Optimiste</option>
              <option value="Organise">Organisé</option>
              <option value="Ouvert d’esprit">Ouvert d’esprit</option>
              <option value="Passionne">Passionné</option>
              <option value="Perfectionniste">Perfectionniste</option>
              <option value="Polyvalent">Polyvalent</option>
              <option value="Reflechi">Réfléchi</option>
              <option value="Rigoureux">Rigoureux</option>
              <option value="Soigneux">Soigneux</option>
              <option value="Souriant">Souriant</option>
              <option value="Travailleur">Travailleur</option>
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('qualite3')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champqualite4" style="display:none">
         <div class="col-auto">
          <label for="qualite4">Qualité 4</label>
          <select class="form-control @error('qualite4') is-invalid @enderror" id="qualite4" name="qualite4">
              <option value="{{ old('qualite4') }}">{{ old('qualite4') }}</option>
              <option value="Analytique">Analytique</option>
              <option value="Ambitieux">Ambitieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Charismatique">Charismatique</option>
              <option value="Communicatif">Communicatif</option>
              <option value="Constructif">Constructif</option>
              <option value="Convaincant">Convaincant</option>
              <option value="Cooperatif">Coopératif</option>
              <option value="Courageux">Courageux</option>
              <option value="Creatif">Créatif</option>
              <option value="Curieux">Curieux</option>
              <option value="Diplomate">Diplomate</option>
              <option value="Dynamique">Dynamique</option>
              <option value="Efficace">Efficace</option>
              <option value="Fiable">Fiable</option>
              <option value="Flexible">Flexible</option>
              <option value="Honnete">Honnête</option>
              <option value="Independant">Indépendant</option>
              <option value="Inventif">Inventif</option>
              <option value="Leader">Leader</option>
              <option value="Loyal">Loyal</option>
              <option value="Minutieux">Minutieux</option>
              <option value="Observateur">Observateur</option>
              <option value="Optimiste">Optimiste</option>
              <option value="Organise">Organisé</option>
              <option value="Ouvert d’esprit">Ouvert d’esprit</option>
              <option value="Passionne">Passionné</option>
              <option value="Perfectionniste">Perfectionniste</option>
              <option value="Polyvalent">Polyvalent</option>
              <option value="Reflechi">Réfléchi</option>
              <option value="Rigoureux">Rigoureux</option>
              <option value="Soigneux">Soigneux</option>
              <option value="Souriant">Souriant</option>
              <option value="Travailleur">Travailleur</option>
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('qualite4')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champqualite5" style="display:none">
         <div class="col-auto">
          <label for="qualite5">Qualité 5</label>
          <select class="form-control @error('qualite5') is-invalid @enderror" id="qualite5" name="qualite5">
              <option value="{{ old('qualite5') }}">{{ old('qualite5') }}</option>
              <option value="Analytique">Analytique</option>
              <option value="Ambitieux">Ambitieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Charismatique">Charismatique</option>
              <option value="Communicatif">Communicatif</option>
              <option value="Constructif">Constructif</option>
              <option value="Convaincant">Convaincant</option>
              <option value="Cooperatif">Coopératif</option>
              <option value="Courageux">Courageux</option>
              <option value="Creatif">Créatif</option>
              <option value="Curieux">Curieux</option>
              <option value="Diplomate">Diplomate</option>
              <option value="Dynamique">Dynamique</option>
              <option value="Efficace">Efficace</option>
              <option value="Fiable">Fiable</option>
              <option value="Flexible">Flexible</option>
              <option value="Honnete">Honnête</option>
              <option value="Independant">Indépendant</option>
              <option value="Inventif">Inventif</option>
              <option value="Leader">Leader</option>
              <option value="Loyal">Loyal</option>
              <option value="Minutieux">Minutieux</option>
              <option value="Observateur">Observateur</option>
              <option value="Optimiste">Optimiste</option>
              <option value="Organise">Organisé</option>
              <option value="Ouvert d’esprit">Ouvert d’esprit</option>
              <option value="Passionne">Passionné</option>
              <option value="Perfectionniste">Perfectionniste</option>
              <option value="Polyvalent">Polyvalent</option>
              <option value="Reflechi">Réfléchi</option>
              <option value="Rigoureux">Rigoureux</option>
              <option value="Soigneux">Soigneux</option>
              <option value="Souriant">Souriant</option>
              <option value="Travailleur">Travailleur</option>
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('qualite5')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champdefaut1" style="display:none">
         <div class="col-auto">
          <label for="defaut1">Défaut 1</label>
          <select class="form-control @error('defaut1') is-invalid @enderror" id="defaut1" name="defaut1">
              <option value="{{ old('defaut1') }}">{{ old('defaut1') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
              <option value="Capricieux">Capricieux</option>
              <option value="Caracteriel">Caractériel</option>
              <option value="Catastrophiste">Catastrophiste</option>
              <option value="Colerique">Colérique</option>
              <option value="Defaitiste">Défaitiste</option>
              <option value="Desordonne">Désordonné</option>
              <option value="Distrait">Distrait</option>
              <option value="Emotif">Émotif</option>
              <option value="Impatient">Impatient</option>
              <option value="Impulsif">Impulsif</option>
              <option value="Influençable">Influençable</option>
              <option value="Intolerant">Intolérant</option>
              <option value="Lent">Lent</option>
              <option value="Manque_de_confiance">Manque de confiance</option>
              <option value="Mefiant">Méfiant</option>
              <option value="Obstination">Obstination</option>
              <option value="Susceptible">Susceptible</option>
              <option value="Timide">Timide</option>
          </select>
          @error('defaut1')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champdefaut2" style="display:none">
         <div class="col-auto">
          <label for="defaut2">Défaut 2</label>
          <select class="form-control @error('defaut2') is-invalid @enderror" value="{{ old('defaut2') }}" id="defaut2" name="defaut2">
              <option value="{{ old('defaut2') }}">{{ old('defaut2') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
              <option value="Capricieux">Capricieux</option>
              <option value="Caracteriel">Caractériel</option>
              <option value="Catastrophiste">Catastrophiste</option>
              <option value="Colerique">Colérique</option>
              <option value="Defaitiste">Défaitiste</option>
              <option value="Desordonne">Désordonné</option>
              <option value="Distrait">Distrait</option>
              <option value="Emotif">Émotif</option>
              <option value="Impatient">Impatient</option>
              <option value="Impulsif">Impulsif</option>
              <option value="Influençable">Influençable</option>
              <option value="Intolerant">Intolérant</option>
              <option value="Lent">Lent</option>
              <option value="Manque_de_confiance">Manque de confiance</option>
              <option value="Mefiant">Méfiant</option>
              <option value="Obstination">Obstination</option>
              <option value="Susceptible">Susceptible</option>
              <option value="Timide">Timide</option>
          </select>
          @error('defaut2')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champdefaut3" style="display:none">
         <div class="col-auto">
          <label for="defaut3">Défaut 3</label>
          <select class="form-control @error('defaut3') is-invalid @enderror" id="defaut3" name="defaut3">
              <option value="{{ old('defaut3') }}">{{ old('defaut3') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
              <option value="Capricieux">Capricieux</option>
              <option value="Caracteriel">Caractériel</option>
              <option value="Catastrophiste">Catastrophiste</option>
              <option value="Colerique">Colérique</option>
              <option value="Defaitiste">Défaitiste</option>
              <option value="Desordonne">Désordonné</option>
              <option value="Distrait">Distrait</option>
              <option value="Emotif">Émotif</option>
              <option value="Impatient">Impatient</option>
              <option value="Impulsif">Impulsif</option>
              <option value="Influençable">Influençable</option>
              <option value="Intolerant">Intolérant</option>
              <option value="Lent">Lent</option>
              <option value="Manque_de_confiance">Manque de confiance</option>
              <option value="Mefiant">Méfiant</option>
              <option value="Obstination">Obstination</option>
              <option value="Susceptible">Susceptible</option>
              <option value="Timide">Timide</option>
          </select>
          @error('defaut3')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>
        
        <div class="col-auto" style="display:none" id="champ_bouton_profil_1">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Terminer l'inscription</button>
            </div>
        </div>
    </form>
@endsection      