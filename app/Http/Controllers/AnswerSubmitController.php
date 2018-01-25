<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use App\Answer;
use App\user_activity;

class AnswerSubmitController extends Controller
{
    public function submit($id,Request $request)
    {
    $msg = $request->comment;

    $user=DB::table('users')
            ->where('id','=',Auth::user()->id)
            ->first();

    $name=$user->name;
    $image=$user->avatar;

    $answer=new Answer;
    $answer->user_id=Auth::user()->id;
    $answer->ques_id=$id;
    $answer->content=$msg;
    $answer->save();

    $question_submitter_id=DB::table('questions')
                           ->where('id','=',$id)
                           ->value('user_id');
    
    if($question_submitter_id!=Auth::user()->id)
    {  
    $user_activity=New user_activity;
    $user_activity->user_id=$question_submitter_id;
    $user_activity->helper_user_id=Auth::user()->id;
    $user_activity->ques_id=$id;
    $user_activity->activity=1;                       
    $user_activity->save();
    }
    
      return response()->json(array('msg'=> $msg,'name'=>$name,'image'=>$image), 200);
    }

    public function edit($id,Request $request)
    {
       //echo $request->updateAns;
      //$question = question::find(Input::get('ques_id'));
        $answer=Answer::find($id);
        $answer->content=$request->updateAns;
        $answer->save();
      //return $request;
    }

    public function select($id,Request $request)
    {
      $answer=Answer::find($id);
      $answer->selected=1;
      $answer->save();
    }
}
