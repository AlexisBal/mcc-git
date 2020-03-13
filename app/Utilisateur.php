<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['email', 'nom', 'prenom', 'mot_de_passe', 'profil', 'niveauetude', 'specialite', 'bac', 'qualite1', 'qualite2', 'qualite3', 'qualite4', 'qualite5', 'defaut1', 'defaut2', 'defaut3'];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
        /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }
}