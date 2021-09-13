<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['image', 'caption'];

    public function album()
    {

        return $this->belongsTo('App\Album', 'album_id');
    }

}
