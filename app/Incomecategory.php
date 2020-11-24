<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incomecategory extends Model
{
    protected $guarded=[];


    public function getAll()
    {
    	return (new self)->latest()->get();
    }

      public function createIncomecategory($data)
    {
    	return (new self)->create($data);
    }
}
