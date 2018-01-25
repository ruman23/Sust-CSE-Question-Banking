<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_activity extends Model
{
    public function question()
    {
       return $this->belongsTo('app\question');
    }
    public function user()
    {
       return $this->belongsTo('app\User'); 
    }
}
