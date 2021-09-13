<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'status'];

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
    public function latestImage()
    {
        return $this->hasOne(Gallery::class);
    }
}
