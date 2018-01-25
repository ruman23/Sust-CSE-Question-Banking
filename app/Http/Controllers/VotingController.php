<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class VotingController extends Controller
{
    public function submit(Request $request)
    {

               $value=DB::table('user_votes')
                ->where('user_id','=',Auth::user()->id)
                ->where('ques_id','=',$request->ques_id)
                ->select('upvote','downvote')
                ->first();
    
   echo $value; 
   if($value===null)
   {
       if($request->action=="up")
       {

         DB::table('questions')->where('id','=',$request->ques_id)->increment('upvote');
         DB::table('user_votes')->insert(
           ['user_id' => Auth::user()->id, 'ques_id' => $request->ques_id,'upvote'=>'1','downvote'=>'0']
           );
         $status='up';
       }
       else
       {
          DB::table('questions')->where('id','=',$request->ques_id)->decrement('upvote');
          DB::table('user_votes')->insert(
           ['user_id' => Auth::user()->id, 'ques_id' => $request->ques_id,'upvote'=>'0','downvote'=>'1']
           );
          $status='down';
        }
       return response()->json(array('status'=> $status), 200);
    }

    }
}
