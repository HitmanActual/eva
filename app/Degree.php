<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    public function doctors(){
        return $this->belongsTo(Doctor::class);
    }
}
