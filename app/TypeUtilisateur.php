<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\TypeUtilisateur as Authenticatable;


class TypeUtilisateur extends Authenticatable
{
    //
    protected $fillable = [
        'type'
    ];


    protected $hidden = [];


    public function utilisateurs() {
        return $this->hasMany("App\Utilisateur");
    }
}
