<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    protected $fillable = [
        'doctor_id',
        'indication',
        'answers',
        'correct_answers',
        'score',

    ];

    public function doctors(){
        return $this->belongsToMany(Doctor::class);
    }
}
