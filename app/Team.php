<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['image','caption'];

    public function album_name(){
    	// return $this->belongsTo(App\Album::class, 'album_id');
    	return $this->belongsTo('App\Album', 'album_id');
    }
}
