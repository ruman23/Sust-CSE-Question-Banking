<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class removeQuesAnsController extends Controller
{
    public function answer(Request $request,$id)
    {
       DB::table('answers')
           ->where('id','=',$id)
           ->delete();
    }
    public function question(Request $request,$id)
    {
    	DB::table('questions')
    	    ->where('id','=',$id)
    	    ->delete();
    }
}
