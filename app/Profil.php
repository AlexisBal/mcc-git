<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Profil extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['niveauetude', 'specialite', 'qualite1', 'qualite2', 'qualite3', 'qualite4', 'qualite5', 'defaut1', 'defaut2', 'defaut3','profil'];

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