<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
   protected $fillable = ['title','slug','description','feature_icon'];
}
