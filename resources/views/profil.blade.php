@extends('layouts.app')

@section('title', 'TEST')

@section('content')
         
    <div class="container">
       <label class="label">Nom :</label>
        {{ $utilisateurs->nom }}
    </div>
   
    <div class="container">
       <label class="label">Prénom :</label>
        {{ $utilisateurs->prenom }}
    </div>

    <div class="container">
       <label class="label">Adresse email :</label>
        {{ $utilisateurs->email }}
    </div>

    <div class="container">
       <label class="label">Niveau d'étude :</label>
        {{ $profils->niveauetude }}
    </div>

    <div class="container">
       <label class="label">Spécialités :</label>
        {{ $profils->specialite }}
    </div>

    <div class="container">
       <label class="label">Qualité 1 :</label>
        {{ $profils->qualite1 }}
    </div>

    <div class="container">
       <label class="label">Qualité 2 :</label>
        {{ $profils->qualite2 }}
    </div>

    <div class="container">
       <label class="label">Qualité 3 :</label>
        {{ $profils->qualite3 }}
    </div>

    <div class="container">
       <label class="label">Qualité 4 :</label>
        {{ $profils->qualite4 }}
    </div>

    <div class="container">
       <label class="label">Qualité 5 :</label>
        {{ $profils->qualite5 }}
    </div>

    <div class="container">
       <label class="label">Défaut 1 :</label>
        {{ $profils->defaut1 }}
    </div>

    <div class="container">
       <label class="label">Défaut 2 :</label>
        {{ $profils->defaut2 }}
    </div>

    <div class="container">
       <label class="label">Défaut 3 :</label>
        {{ $profils->defaut3 }}
    </div>


@endsection