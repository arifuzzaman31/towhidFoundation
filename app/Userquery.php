<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userquery extends Model
{
    protected $table = 'user_query';
    protected $fillable = ['service_id','name','phone','address','message'];

    public function service_name(){
  
    	return $this->belongsTo('App\Service', 'service_id');
    }
}
