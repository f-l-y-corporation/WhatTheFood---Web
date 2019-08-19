<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Reponse as Authenticatable;


class Reponse extends Authenticatable
{
    //

    protected $fillable = [
        'reponse'
    ];


    protected $hidden = [];

    
    public function question() {
        return $this->belongsTo("App\Question");
    }
    public function enregistrement() {
        return $this->belongsTo("App\Enregistrement");
    }
} 
