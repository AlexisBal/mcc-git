@extends('layouts.app')

@section('title', 'TEST')

@section('content')
         
    <div class="container">
       <label class="label">Prenom :</label>
        {{ $utilisateurs->prenom }}
    </div>
   
    <div class="container">
       <label class="label">Nom :</label>
        {{ $utilisateurs->nom }}
    </div>

    <div class="container">
       <label class="label">Adresse email :</label>
        {{ $utilisateurs->email }}
    </div>


@endsection