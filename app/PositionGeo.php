<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\PositionGeo as Authenticatable;


class PositionGeo extends Authenticatable
{
    //
    
    protected $fillable = [
        'latitude','longitude','details'
    ];


    protected $hidden = [];


    public function enregistrements() {
        return $this->hasMany("App\Enregistrement");
    }
}
