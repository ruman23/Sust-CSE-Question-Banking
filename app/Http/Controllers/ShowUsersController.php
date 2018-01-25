<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;

class ShowUsersController extends Controller
{
    public function index()
    {
    	$user=DB::table('users')
    	      ->get();

    	return view::make('show_user')->with('user',$user); 
    }
}
