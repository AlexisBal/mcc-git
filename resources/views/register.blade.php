@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <form action="/inscription" method="post">
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <input class="input is-medium" type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom">
            </div>
            @if($errors->has('nom'))
                <p class="help is-danger">{{ $errors->first('nom') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <input class="input is-medium" type="text" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom">
            </div>
            @if($errors->has('prenom'))
                <p class="help is-danger">{{ $errors->first('prenom') }}</p>
            @endif
        </div>  
        
        <div class="field">
            <p class="control has-icons-left has-icons-right"> 
                <input class="input is-medium" type="email" name="email" value="{{ old('email') }}" placeholder="Adresse email">
                <span class="icon is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-right">
                  <i class="fas fa-check"></i>
                </span>
            </p>
            @if($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="field">
            <p class="control has-icons-left">
                <input class="input is-medium" type="password" id="mdp" name="password" placeholder="Mot de passe">
                <span class="icon is-left">
                  <i class="fas fa-lock"></i>
                </span>
            </p>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <p class="control has-icons-left">
                <input class="input is-medium" type="password" id="mdp2" name="password_confirmation" placeholder="Confirmation du mot de passe">
                <span class="icon is-left">
                  <i class="fas fa-lock"></i>
                </span>
            </p>
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




