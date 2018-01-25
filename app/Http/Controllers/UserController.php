<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Image;
use View;
use File;

class UserController extends Controller
{

  public function archieveForCurrentUser($id)
{

  $subject=DB::table('subject')
             ->get();

 
$check=0;
  $data=DB::table('academic_archive')
  ->join('academic_archive_file','academic_archive.id','=','academic_archive_file.foreign_id')
  ->select('academic_archive_file.file as file','academic_archive.subject as subject','academic_archive.session as session','academic_archive.semester as semester','academic_archive.type','academic_archive.teacher','academic_archive.user_id','academic_archive_file.id')
   ->where('academic_archive.user_id', '=', $id )
  ->get();
  return view::make('academic_archive_file_view')->with('data',$data)->with('check',$check)->with('subject',$subject); 



      
}
    public function profile($id)
    {
      $user=DB::table('users')
            ->where('id','=',$id)
            ->first();

      $asked=DB::table('questions')
             ->where('user_id','=',$id)
             ->where('privacy_status','=',0)
             ->get();

      $answered=DB::table('questions')
                ->join('answers','questions.id','=','answers.ques_id')
                ->where('answers.user_id','=',$id)
                ->select('questions.id','questions.title')
                ->distinct()
                ->get();

      $private=DB::table('questions')
               ->where('user_id','=',$id)
               ->where('privacy_status','=',1)
               ->get();

    //  echo $asked;
    //  echo $private;        
 
    return view::make('profile')->with('user',$user)->with('asked',$asked)->with('answered',$answered)->with('private',$private);
    }

    public function update(Request $request)
    {
      
       if(Input::hasFile('avatar')) 
      //  if($request->file('avatar'))
       {
       	$avatar=Input::file('avatar');
       	$filename=time().'.'.$avatar->getClientOriginalExtension();
        $avatar->move(public_path().'/'.'img'.'/',$filename);
    // Image::make($avatar)->resize(300,300)->save(public_path('/img/'.$filename));

        $user=Auth::user();
        $user->avatar=$filename;
        $user->save();
       }
       return $this->profile(Auth::user()->id); 
       //return view('profile',array('user'=>Auth::user()));
    }
}
