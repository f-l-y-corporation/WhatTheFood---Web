<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Utilisateur as Authenticatable;

class Utilisateur extends Authenticatable
{
    //

    protected $fillable = [
        'nom','prenom','telephone','code','cni'
    ];


    protected $hidden = [];


    public function sondage() {
        return $this->belongsTo("App\Sondage");
    }
    public function typeutilisateur() {
        return $this->belongsTo("App\TypeUtilisateur");
    }

    public function enregistrements() {
        return $this->hasMany("App\Enregistrement");
    }
}
