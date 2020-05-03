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
              <option value="{{ old('profileleve') }}">{{ old('profileleve') }}</option>
              <option value="Analytique">Analytique</option>
              <option value="test">test</option>
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
              <option value="Analytique">Analytique</option>
              <option value="Ambitieux">Ambitieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Charismatique">Charismatique</option>
              <option value="Communicatif">Communicatif</option>
              <option value="Constructif">Constructif</option>
              <option value="Convaincant">Convaincant</option>
              <option value="Cooperatif">Coopératif</option>
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('ambiancetravail')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champtempstravail" style="display:none">
         <div class="col-auto">
          <label for="tempstravail">Ton temps de travail personnel hebdomadaire</label>
          <select class="form-control @error('tempstravail') is-invalid @enderror" id="tempstravail" name="tempstravail">
              <option value="{{ old('tempstravail') }}">{{ old('tempstravail') }}</option>
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
              <option value="Volontaire">Volontaire</option>
          </select>
          @error('tempstravail')
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
              <option value="{{ old('methodes') }}">{{ old('methodes') }}</option>
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
          <label for="matieresfav">Quelles sont tes matières favorites ?</label>
          <select class="form-control @error('matieresfav') is-invalid @enderror" id="matieresfav" name="matieresfav">
              <option value="{{ old('matieresfav') }}">{{ old('matieresfav') }}</option>
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
          </select>
          @error('matieresfav')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
         </div>
        </div>

        <div class="form-group" id="champmaths" style="display:none">
         <div class="col-auto">
          <label for="maths">Ta moyenne en Maths</label>
          <select class="form-control @error('maths') is-invalid @enderror" id="maths" name="maths">
              <option value="{{ old('maths') }}">{{ old('maths') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('physique') }}">{{ old('physique') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('svt') }}">{{ old('svt') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('si') }}">{{ old('si') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('eco') }}">{{ old('eco') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('francais') }}">{{ old('maths') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('philosophie') }}">{{ old('philosophie') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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
              <option value="{{ old('anglais') }}">{{ old('anglais') }}</option>
              <option value="Agressif">Agressif</option>
              <option value="Anxieux">Anxieux</option>
              <option value="Astucieux">Astucieux</option>
              <option value="Arrogant">Arrogant</option>
              <option value="Assiste">Assisté</option>
              <option value="Autoritaire">Autoritaire</option>
              <option value="Bavard">Bavard</option>
              <option value="Blessant">Blessant</option>
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