<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use View;

class TagController extends Controller
{
    public function all()
    {
    	$tag=DB::table('tags')
           ->orderBy('tag_name')
    	     ->get();
        
        $count=[];

        foreach ($tag as $tags) 
        {
             $count[]=DB::table('tag_relations')
                      ->where('tag_id','=',$tags->id)
                      ->count();
        }

    	// echo sizeof($tag);
    	$size=sizeof($tag);
    	$row=ceil($size/3);    
        return view('tag')->with('tag',$tag)->with('count',$count)->with('size',$size)->with('row',$row); 
    }

    public function specific($id)
    {
        
        $title="Latest Question";

    	        $ques_list=DB::table('questions')
                           ->where('privacy_status','=',0)
                           ->join('tag_relations','tag_relations.question_id','=','questions.id')
                           ->where('tag_relations.tag_id','=',$id)
                           ->select('questions.id','questions.title','questions.content','questions.created_at','tag_relations.tag_id')
                           ->orderBy('created_at', 'desc')
                           ->paginate(5);

        $total_answer=[];
        $tag=[];

        foreach ($ques_list as $question)
        {
             $total_answer[]=DB::table('answers')
                            ->where('ques_id','=',$question->id)
                            ->count();
             
             $tag[$question->id]=DB::table('tag_relations')
                                 ->where('tag_relations.question_id','=',$question->id)
                                 ->join('tags','tags.id','=','tag_relations.tag_id')
                                 ->select('tags.tag_name')
                                 ->get();
        }
       return view('home_tag')->with('list',$ques_list)->with('total_answer',$total_answer)->with('ques_tag',$tag)->with('title',$title)->with('tag_id',$id);

    }

    public function specific_vote($id)
    {
          $title="Top Voted Question";
              $ques_list=DB::table('questions')
                           ->where('privacy_status','=',0)
                           ->join('tag_relations','tag_relations.question_id','=','questions.id')
                           ->where('tag_relations.tag_id','=',$id)
                           ->select('questions.id','questions.title','questions.content','questions.created_at','tag_relations.tag_id')
                           ->orderBy('upvote', 'desc')
                           ->paginate(5); 

        $total_answer=[];
        $tag=[];

        foreach ($ques_list as $question)
        {
             $total_answer[]=DB::table('answers')
                            ->where('ques_id','=',$question->id)
                            ->count();
             
             $tag[$question->id]=DB::table('tag_relations')
                                 ->where('tag_relations.question_id','=',$question->id)
                                 ->join('tags','tags.id','=','tag_relations.tag_id')
                                 ->select('tags.tag_name')
                                 ->get();
        }
       return view('home_tag')->with('list',$ques_list)->with('total_answer',$total_answer)->with('ques_tag',$tag)->with('title',$title)->with('tag_id',$id);

    }
 
 public function specific_teacher($id)
    {
        $title="Teacher's Question";
              $ques_list=DB::table('questions')
                           ->where('privacy_status','=',2)
                           ->join('tag_relations','tag_relations.question_id','=','questions.id')
                           ->where('tag_relations.tag_id','=',$id)
                           ->select('questions.id','questions.title','questions.content','questions.created_at','tag_relations.tag_id')
                           ->orderBy('created_at', 'desc')
                           ->paginate(5);

        $total_answer=[];
        $tag=[];

        foreach ($ques_list as $question)
        {
             $total_answer[]=DB::table('answers')
                            ->where('ques_id','=',$question->id)
                            ->count();
             
             $tag[$question->id]=DB::table('tag_relations')
                                 ->where('tag_relations.question_id','=',$question->id)
                                 ->join('tags','tags.id','=','tag_relations.tag_id')
                                 ->select('tags.tag_name')
                                 ->get();
        }
       return view('home_tag')->with('list',$ques_list)->with('total_answer',$total_answer)->with('ques_tag',$tag)->with('title',$title)->with('tag_id',$id);

    }
 
    public function ajax(Request $request){

        $query = $request->get('query',''); 
      //  $user = DB::table('users')->where('name', 'John')->first();       
	//$sql = "SELECT name FROM tags 
	//		WHERE name LIKE '%".$_GET['query']."%'
	//		LIMIT 10";
      //  $users = DB::table('users')->where('name', 'like', 'T%')->get();
        $posts = DB::table('tags')->select('tag_name')->where('tag_name','LIKE','%'.$query.'%')->get();        

        return response()->json($posts);
	}

	public function submit()
	{
		return Input::all();
	}

}