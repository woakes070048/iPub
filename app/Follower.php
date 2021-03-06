<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
     protected $fillable = [
          'user_id',
          'name',
          'email',
          'picture',
     ];

     /*
     /**
      * a follower has 0 or more followings
      * @return \App\Following
      *
     public function followings(){
        return $this->hasMany('App\Following');
     }*/

     /**
      * a follower follows 0 or more users
      * @return \App\User
      */
     public function users(){
        return $this->belongsToMany('App\User');
     }
}
