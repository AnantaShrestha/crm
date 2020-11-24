<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function getLatestCourseNumber(){
        $course_no = 1;
        $row = self::orderBy('id', 'DESC')->first();
        $course_new = (is_null($row)) ? 'COURSE-'.$course_no : 'COURSE-'.((int)(
            str_replace("COURSE-", "", $row->code)
            ) + 1);
        return $course_new;
    }

  
    public function students(){
        return $this->belongsToMany(Student::class, 'course_student');
    }

  
}
