<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
       protected $fillable = [
        'title', 'content'
    ];
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public function user(){
        return $this->belongsTo(\App\User::class,'user_id');
      }
}