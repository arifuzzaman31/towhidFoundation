<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userquery extends Model
{
    protected $table = 'user_query';
    protected $fillable = ['service_id','name','phone','address','message'];
}
