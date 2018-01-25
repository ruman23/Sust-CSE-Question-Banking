<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use View;
use DB;

class QuestionEditController extends Controller
{
    public function index($id)
    {
    	$ques_content=DB::table('questions')
    	              ->where('id','=',$id)
    	              ->value('content');
    	$update=1;
    	return view::make('ask_question')->with('update',$update)->with('ques_id',$id)->with('ques_content',$ques_content);
    }

    public function privacy($id,Request $request)
    {
    	//echo $id;
    	//echo $request->title; 
    	if($request->title=="Private")
    	{
        $question=question::find($id);
        $question->privacy_status=2;
        $question->save();
    	}
        elseif($request->title=="Teachers Only")
        {
        $question=question::find($id);
        $question->privacy_status=0;
        $question->save();
        }
    	else
    	{
        $question=question::find($id);
        $question->privacy_status=1;
        $question->save();
    	}

    }
}
