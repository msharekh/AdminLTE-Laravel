<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['name'];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
