<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'address'
    ];

    public function degrees(){
        return $this->hasMany(Degree::class);
    }
}
