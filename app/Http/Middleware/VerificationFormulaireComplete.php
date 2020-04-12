<?php

namespace App\Http\Middleware;

use Closure;
use App\Profil;
use Illuminate\Support\Facades\Auth;

class VerificationFormulaireComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Profil::where('id', '=',Auth::user()->id)->doesntExist()) {
            flash("Vous devez terminer l'inscription !")->error();

            return redirect('/mes-informations');
        }
        return $next($request);
    }
}
