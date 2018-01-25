<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input; 
use Illuminate\Http\Request;
use View;
use Auth;
use DB;
use App\question;
use App\tag_relation;

class QuestionSubmitController extends Controller
{

    public function submit(Request $request)
    {
      
    // return Input::all();

       $data=DB::table('questions')
             ->where('user_id','=',Auth::user()->id)
             ->where('id','=',Input::get('ques_id'))
             ->count();

        if($data==0)
        {
       $title=Input::get('title');
       $content=Input::get('myDoc');
       $content=htmlspecialchars($content);
       
       if(Input::get('privacy')=='public')
        $privacy_status=0;
        else if(Input::get('privacy')=='private')
        $privacy_status=1;
        else
        $privacy_status=2;

       $question=new question;
       $question->user_id=Auth::user()->id;
       $question->title=$title;
       $question->content=$content;
       $question->date=time();
       $question->privacy_status=$privacy_status;
       $question->save();
       
        foreach ($request->tag_id as $tag_id)
        {
            $tag_relation=new tag_relation;
            $tag_relation->question_id=Input::get('ques_id');
            $tag_relation->tag_id=$tag_id;
            $tag_relation->save();    
        }
        }
        else
        {
           $question = question::find(Input::get('ques_id'));
         //  $question->title = Input::get('title');
           $question->content = htmlspecialchars(Input::get('myDoc'));
          // $question->date = time();
           $question->save(); 
  
/*
    DB::table('tag_relations')->where('ques_id', '=', Input::get('ques_id'))->delete();         
        foreach ($request->tag_id as $tag_id)
        {
            $tag_relation=new tag_relation;
            $tag_relation->question_id=Input::get('ques_id');
            $tag_relation->tag_id=$tag_id;
            $tag_relation->save();    
        }
*/
        }
       
      // '/show_question/{id}'
      // return $this->show(Input::get('ques_id'));
    //  return redirect()->route('/show_question/{id}', [Input::get('ques_id')]);
      return redirect()->action('QuestionSubmitController@show',[Input::get('ques_id')]);
      //return redirect('/show_question/{Input::get('ques_id')}');
    }

     public function show ($id)
     {
/*
      $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
*/
         $question=DB::table('questions')
                   ->where('id','=',$id)
                  // ->join('users','questions.user_id','=','users.id')
                  // ->select('questions.id','questions.user_id','questions.content','questions.upvote','questions.downvote','questions.created_at','questions.title','questions.privacy_status','users.id')
                   ->get();

          $question_submitter=DB::table('users')
                              ->where('id','=',$question[0]->user_id)
                              ->first();         

         $tag=DB::table('tag_relations')
              ->join('tags','tag_relations.tag_id','=','tags.id')
                  ->where('question_id','=',$id)
                  ->get(); 

         $answer=DB::table('answers')
                 ->join('users','answers.user_id','=','users.id')
                 ->select('users.id as user_id','users.name','users.avatar','answers.content','answers.created_at','answers.id','answers.selected')
                 ->where('ques_id','=',$id)
                 ->orderBy('answers.id', 'desc')
                 ->get();

          $vote=DB::table('user_votes')
                ->where('ques_id','=',$id)
                ->where('user_id','=',Auth::user()->id)
                ->first();                        

//return $vote; 

if($vote===null)
  $vote_status='none';
else
{  
if($vote->upvote==1)
  $vote_status='up';
else if($vote->downvote==1)
  $vote_status='down';
}

 
  return view::make('show_question')->with('question',$question)->with('tag',$tag)->with('answer',$answer)->with('vote',$vote_status)->with('submitter',$question_submitter);

     }
}


/*
$image = Input::file($i.'_'.$j.'_image');
    $original_name = $image->getClientOriginalName();
    $image_extension= $image->getClientOriginalExtension();
        $image->move(public_path().'/'.'temporary'.'/'.$i.'/'.$j.'/',$candidate_name.'.'.$image_extension);


$filename = "";
        if(Input::hasFile('image'))
        {
        $file = Input::file('image');

        $destinationPath = public_path(). '/images/';
        $filename = $file->getClientOriginalName();

        $file->move($destinationPath, $filename);
       }
       */