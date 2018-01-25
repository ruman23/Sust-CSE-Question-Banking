<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $title="Latest Question";

        $ques_list=DB::table('questions')
                   ->orderBy('created_at', 'desc')
                   ->where('privacy_status','=',0)
                   ->paginate(5);
                   //->get();
         

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
                                 //->toArray();

        }
         
   // $ntag = json_decode($tag[14], true);
  //print_r($ntag);        // Dump all data of the Array
  //echo $ntag[0]["tag_name"];
    //    return $tag[13]; 

return view('home')->with('list',$ques_list)->with('total_answer',$total_answer)->with('ques_tag',$tag)->with('title',$title);

    }

    public function index_vote()
    {
        $title="Top Voted Question";

               $ques_list=DB::table('questions')
                   ->orderBy('upvote','desc')
                   ->where('privacy_status','=',0)
                   ->paginate(5);
                   //->get();
         

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
                                 //->toArray();

        }
         
   // $ntag = json_decode($tag[14], true);
  //print_r($ntag);        // Dump all data of the Array
  //echo $ntag[0]["tag_name"];
    //    return $tag[13]; 

return view('home')->with('list',$ques_list)->with('total_answer',$total_answer)->with('ques_tag',$tag)->with('title',$title);

    }

    public function index_teacher()
    {
        $title="Teacher's Question";

                $ques_list=DB::table('questions')
                   ->orderBy('created_at', 'desc')
                   ->where('privacy_status','=',2)
                   ->paginate(5);
                   //->get();
         

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
                                 //->toArray();

        }
         
   // $ntag = json_decode($tag[14], true);
  //print_r($ntag);        // Dump all data of the Array
  //echo $ntag[0]["tag_name"];
    //    return $tag[13]; 

     return view('home')->with('list',$ques_list)->with('total_answer',$total_answer)->with('ques_tag',$tag)->with('title',$title);

    }
}