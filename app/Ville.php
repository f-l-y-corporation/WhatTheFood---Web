<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Ville as Authenticatable;

class Ville extends Authenticatable
{
    //


    protected $fillable = [
        'ville'
    ];


    protected $hidden = [];


    public function pays() {
        return $this->belongsTo("App\Pays");
    }

    public function quartiers() {
        return $this->hasMany("App\Quartier");
    }
}
