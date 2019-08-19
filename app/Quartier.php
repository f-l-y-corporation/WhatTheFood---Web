<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Quartier as Authenticatable;


class Quartier extends Authenticatable
{
    //

    protected $fillable = [
        'quartier'
    ];


    protected $hidden = [];


    public function ville() {
        return $this->belongsTo("App\Ville");
    }

    public function enregistrements() {
        return $this->hasMany("App\Enregistrement");
    }
}
