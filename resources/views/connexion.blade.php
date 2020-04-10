@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <form action="/connexion" method="post" class="section">
        {{ csrf_field() }}

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

        <div class="field-body">
            <div class="field">
                <p class="control">
                    <label class="checkbox">
                        <input type="checkbox"
                                name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                    </label>
                </p>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Se connecter</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection