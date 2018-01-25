<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public function user()
    {
        return $this->belongsTo('app\User'); 
    }
    public function tag_relation() 
    {
    	return $this->belongsTo('app\tag_relation'); 
    }
    public function answer()
    {
    	return $this->hasMany('app\Answer');
    }
    public function user_vote()
    {
        return $this->belongsTo('app\user_vote');
    }
    public function user_activity()
    {
        return $this->hasMany('app\user_activity');
    }
}
