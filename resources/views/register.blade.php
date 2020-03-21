@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <form action="/inscription" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label" id="nom">Nom</label>
            <div class="control">
                <input class="input" type="text" name="nom">
            </div>
            @if($errors->has('nom'))
                <p class="help is-danger">{{ $errors->first('nom') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label" id="prenom">Prénom</label>
            <div class="control">
                <input class="input" type="text" name="prenom">
            </div>
            @if($errors->has('prenom'))
                <p class="help is-danger">{{ $errors->first('prenom') }}</p>
            @endif
        </div>  
        
        <div class="field">
          <label class="label" id="mail">Adresse e-mail</label>
          <div class="control">
            <input class="input" type="email" name="email" vvalue="{{ old('email') }}">
          </div>
          @if($errors->has('email'))
              <p class="help is-danger">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <div class="field">
            <label class="label" id="mdp">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label" id="mdp2">Confirmation du mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
            @if($errors->has('password_confirmation'))
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">M'inscrire</button>
            </div>
        </div>
    </form>
@endsection




