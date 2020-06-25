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
    // public function comments(){
    //     return $this->hasMany(Comment::class);
    // }

    //  public function users(){
    //             return $this->belongsToMany(Student::class)->withPivot('comment');
    //         }

    public function users(){
        return $this->belongsToMany(Student::class)->withPivot('comment');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }

        
}
