<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    
    public function getPaginateByLimit(int $limit_count = 2){
        return $this->orderBy('created_at', 'DESC')->paginate($limit_count);
    }
    //
    protected $fillable = [
        'name',
        'address',
        'image_path',
        'prefecture'
    ];
        
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    
    public function cafes(){
        return $this->hasMany('App\Cafe');
    }
}
