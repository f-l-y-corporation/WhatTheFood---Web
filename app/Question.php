<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Question as Authenticatable;


class Question extends Authenticatable
{
    //

    protected $fillable = [
        'question'
    ];


    protected $hidden = [];

    public function questionnaire() {
        return $this->belongsTo("App\Questionnaire");
    }

    public function reponses() {
        return $this->hasMany("App\Reponse");
    }
}
