<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag_relation extends Model
{
    public function question()
    {
        return $this->hasMany('app\question'); 
    }
    public function tag()
    {
    	return $this->hasMany('app\tag');
    }

}
