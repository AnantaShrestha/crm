<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Course;

class Vendor extends Model
{
    use SoftDeletes;
    protected $guarded=[];

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_vendors');
    }


    public function createvendor($data)
    {
    	return (new self)->create($data);
    }
}
