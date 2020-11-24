<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Expensescategory;

class Expenses extends Model
{
    //
    protected $guarded=
    [
    ];
    public function expensescategory(){

    	return $this->belongsTo(Expensescategory::class,'category_id');
    }
}
