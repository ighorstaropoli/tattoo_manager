<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $dates = ['dob'];

    public function search($query){
   		return $this
	   		->where('email', 'LIKE', '%'. $query .'%')
	   		->orWhere('name', 'LIKE', '%'. $query .'%')->get();
    }
}
