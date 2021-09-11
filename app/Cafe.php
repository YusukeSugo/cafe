<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'image_path',
        'prefecture'
        ];
}
