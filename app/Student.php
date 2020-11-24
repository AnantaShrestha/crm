<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    //
    use SoftDeletes;

   

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_student');
    }

    


}
