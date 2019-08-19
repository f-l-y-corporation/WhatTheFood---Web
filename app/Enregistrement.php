<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Enregistrement as Authenticatable;


class Enregistrement extends Authenticatable
{
    //

    protected $fillable = [
        'dateenre','statut','iamge'
    ];


    protected $hidden = [];

    public function sondage() {
        return $this->belongsTo("App\Sondage");
    }
    public function quartier() {
        return $this->belongsTo("App\Quartier");
    }
    public function postiongeo() {
        return $this->belongsTo("App\PositionGeo");
    }
    public function utilisateur() {
        return $this->belongsTo("App\Utilisateur");
    }

    public function reponses() {
        return $this->hasMany("App\Reponse");
    }
}
