<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
