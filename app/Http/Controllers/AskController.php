<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Auth;

class AskController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            $update=0;
            $latest_id=DB::table('questions')->max('id');
            $latest_id++;
            return view::make('ask_question')->with('ques_id',$latest_id)->with('update',$update);
        }
        else
        {
        	return view::make('noentry');
        }
    }
}
