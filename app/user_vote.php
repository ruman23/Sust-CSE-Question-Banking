<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_vote extends Model
{
     public function user()
     {
        return $this->hasOne('app\User'); 
     }
     public function question()
     {
        return $this->hasOne('app\question'); 
     }
}
