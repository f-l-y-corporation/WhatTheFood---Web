<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Pays as Authenticatable;


class Pays extends Authenticatable
{
    //

    protected $fillable = [
        'pays'
    ];


    protected $hidden = [];

    public function sondage() {
        return $this->belongsTo("App\Sondage");
    }

    public function villes() {
        return $this->hasMany("App\Ville");
    }
}
