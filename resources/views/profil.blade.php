@extends('layouts.app')

@section('title', 'TEST')

@section('content')
         
    <div class="container">
       <label class="label" id="nom">Adresse email :</label>
        {{ $utilisateurs->email }}
    </div>


@endsection