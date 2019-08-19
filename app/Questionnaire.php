<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Questionnaire as Authenticatable;


class Questionnaire extends Authenticatable
{
    //

    protected $fillable  = [];
    protected $hidden  = [];

    public function sondage() {
        return $this->belongsTo("App\Sondage");
    }

    public function questions() {
        return $this->hasMany("App\Question");
    }


}
