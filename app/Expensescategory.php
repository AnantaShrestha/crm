<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Expenses;
class Expensescategory extends Model
{
    protected $guarded=[];



    public function getAll()
    {
    	return (new self)->latest()->get();
    }
    public function createExpensescategory($data)
    {
    	return (new self)->create($data);
    }

    public function expenses()
    {
    	return $this->hasMany(Expenses::class,'category_id');
    }
}
