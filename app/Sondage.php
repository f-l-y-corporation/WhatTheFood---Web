<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Sondage as Authenticatable;


class Sondage extends Authenticatable
{
    //

    protected $fillable = [
        'sondage','perdebut','perfin'
    ];


    protected $hidden = [];


    

    public function utilisateurs() {
        return $this->hasMany("App\Utilisateur");
    }
    public function questionnaires() {
        return $this->hasMany("App\Questionnaire");
    }
    public function enregistrements() {
        return $this->hasMany("App\Enregistrement");
    }
    public function pays() {
        return $this->hasMany("App\Pays");
    }
}
