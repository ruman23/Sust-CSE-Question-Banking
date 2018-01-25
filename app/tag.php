<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function tag_relation()
    {
    	return $this->belongsTo('tag_relation'); 
    }
}
