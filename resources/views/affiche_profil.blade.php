@extends('layouts.app')

@section('title', 'TEST')

@section('content')

<form>
    <div class="form-group">
        <div class="col-auto">
          <label class="label">Nom</label>
          <select class="form-control" disabled>
              <option>{{ $utilisateurs->nom }}</option>
          </select>
        </div>
    </div>
   
    <div class="form-group">
        <div class="col-auto">
          <label class="label">Prénom</label>
          <select class="form-control" disabled>
              <option>{{ $utilisateurs->prenom }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Adresse email</label>
          <select class="form-control" disabled>
              <option>{{ $utilisateurs->email }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Niveau d'études</label>
          <select class="form-control" disabled>
              <option>{{ $profils->niveauetude }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Spécialités choisies</label>
          <select class="form-control" disabled>
              <option>{{ $specialite }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Qualité 1</label>
          <select class="form-control" disabled>
              <option>{{ $profils->qualite1 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Qualité 2</label>
          <select class="form-control" disabled>
              <option>{{ $profils->qualite2 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Qualité 3</label>
          <select class="form-control" disabled>
              <option>{{ $profils->qualite3 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Qualité 4</label>
          <select class="form-control" disabled>
              <option>{{ $profils->qualite4 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Qualité 5</label>
          <select class="form-control" disabled>
              <option>{{ $profils->qualite5 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Défaut 1</label>
          <select class="form-control" disabled>
              <option>{{ $profils->defaut1 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Défaut 2</label>
          <select class="form-control" disabled>
              <option>{{ $profils->defaut2 }}</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-auto">
          <label class="label">Défaut 3</label>
          <select class="form-control" disabled>
              <option>{{ $profils->defaut3 }}</option>
          </select>
        </div>
    </div>
    
    <div class="form-row align-items-center">
      <div class="col-auto">
            <div class="form-check mb-2">
                <button type="submit" class="btn btn-primary" href="">Modifier mes informations</button>
            </div>
      </div>
      <div class="col-auto">
            <div class="form-check mb-2">
                <button type="submit" class="btn btn-primary" href="#">Retour à l'accueil</button>
            </div>
      </div>
    </div>
</form>
@endsection      




