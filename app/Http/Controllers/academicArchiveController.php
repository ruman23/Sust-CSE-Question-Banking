<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input; 
use Illuminate\Http\Request;
use View;
use Auth;
use DB;
use Redirect;
use File;

class academicArchiveController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

public function subject()
{

}

public function index()
{
    $subject=DB::table('subject')
             ->get();

    return view::make('academic_archive')->with('subject',$subject);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

public function sessionToSemester($id){
 $data=DB::table('academic_archive')
 ->select('session','semester')
 ->distinct('semester')
 ->where('session','=',$id)

 ->get();

     $subject=DB::table('subject')
             ->get();

 
 return view::make('academic_archive_semester_view')->with('data',$data)->with('subject',$subject); 
}


public function semesterToSubject( $session, $semester ){


$data=DB::table('academic_archive')
  
  ->select('subject','session','semester')
  ->where('session' ,'=', $session)
    ->where('semester' ,'=', $semester)
    ->distinct('subject')
  ->get();

    $subject=DB::table('subject')
             ->get();


  return view::make('academic_archive_subject_view')->with('data',$data)->with('subject',$subject);

}

public function subjectToFile($session, $semester , $subject){
 
$check=1; 
$data=DB::table('academic_archive')
  ->join('academic_archive_file','academic_archive.id','=','academic_archive_file.foreign_id')
  ->select('academic_archive_file.file as file','academic_archive.subject as subject','academic_archive.session as session','academic_archive.semester as semester','academic_archive.type','academic_archive.teacher','academic_archive.user_id','academic_archive_file.id')
  ->where('academic_archive.session' ,'=', $session)
    ->where('academic_archive.semester' ,'=', $semester)
    ->where('academic_archive.subject' ,'=', $subject)
  ->get();

    $subject=DB::table('subject')
             ->get();


  return view::make('academic_archive_file_view')->with('data',$data)->with('check',$check)->with('subject',$subject);

}

public function store(Request $request)
{

      $subject=DB::table('subject')
             ->get();


  $chk=DB::table('academic_archive')
  ->where('subject' ,'=',Input::get('subject'))
  ->where('semester' ,'=',Input::get('semester'))
  ->where('session' ,'=',Input::get('session'))
  ->where('type' ,'=',Input::get('type'))
  ->where('user_id' ,'=',Auth::user()->id)
  ->get();


  if (count($chk)>0){

    if (Input::hasFile('image')) {
      $image = Input::file('image');

      foreach ($image as $image) {

        $image->move(public_path().'/'.'img'.'/'.'question'.'/',$image->getClientOriginalName());

        $path='/'.'img'.'/'.'question'.'/'.$image->getClientOriginalName();
        
        $id= $chk[0]->id;
        


        $exist=DB::table('academic_archive_file')
        ->where('file','=',$path)
        ->get(); 

        if( count($exist)>0){
          return view::make('academic_archive');
        }
        else{
         DB::table('academic_archive_file')->insert([
           'foreign_id'=>$id,
           'file'=>$path]);
       }
     }
   }
     // echo "if loop";
   return view::make('academic_archive')->with('subject',$subject);
 }

 else{   DB::table('academic_archive')->insert([
  'user_id'=>Auth::user()->id,
  'subject'=>Input::get('subject'),
  'semester'=>Input::get('semester'),
  'session'=>Input::get('session'),
  'teacher'=>Input::get('teacher'),
  'type'=>Input::get('type')]);




  if (Input::hasFile('image')) {
    $image = Input::file('image');
    
    foreach ($image as $image) {


      $image->move(public_path().'/'.'img'.'/'.'question'.'/',$image->getClientOriginalName());

      $path='/'.'img'.'/'.'question'.'/'.$image->getClientOriginalName();
   // echo $path;
      $latest_id=DB::table('academic_archive')->max('id');
        //$latest_id++;
        //echo $latest_id;

      DB::table('academic_archive_file')->insert([
       'foreign_id'=>$latest_id,
       'file'=>$path]);
    }
  }
  // echo "else loop";
  return view::make('academic_archive')->with('subject',$subject);

}


   // return view::make('academic_archive');
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show()
{

    $subject=DB::table('subject')
             ->get();


  $check=0;
  $data=DB::table('academic_archive')
  ->join('academic_archive_file','academic_archive.id','=','academic_archive_file.foreign_id')
  ->select('academic_archive_file.file as file','academic_archive.subject as subject','academic_archive.session as session','academic_archive.semester as semester','academic_archive.type','academic_archive.teacher','academic_archive.user_id','academic_archive_file.id')
  ->get();
  return view::make('academic_archive_file_view')->with('data',$data)->with('check',$check)->with('subject',$subject);      
}


public function search(Request $request)
{
$check=0;
  $data=DB::table('academic_archive')
  ->join('academic_archive_file','academic_archive.id','=','academic_archive_file.foreign_id')
  ->where('academic_archive.subject','=',Input::get('subject'))
  ->where('academic_archive.semester','=',Input::get('semester'))
  ->where('academic_archive.session','=',Input::get('session'))
  ->get();

    $subject=DB::table('subject')
             ->get();


  return view::make('academic_archive_file_view')->with('data',$data)->with('check',$check)->with('subject',$subject);      
}

public function album(Request $request)
{

 $data=DB::table('academic_archive')

 ->select('session')
 ->distinct()
 ->orderBy('session','desc')
 ->get();

   $subject=DB::table('subject')
            ->get();


 return view::make('academic_archive_album_view')->with('data',$data)->with('subject',$subject);      
}

public function albumFullQuery (Request $request)
{

 $data=DB::table('academic_archive')
 ->join('academic_archive_file','academic_archive.id','=','academic_archive_file.foreign_id')
 ->select('academic_archive_file.file as file','academic_archive.subject as subject','academic_archive.session as session','academic_archive.semester as semester')
 ->get();

     $subject=DB::table('subject')
             ->get();


 return view::make('academic_archive_album_view')->with('data',$data)->with('subject',$subject);      
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function remove($id)
{
  
  $filepath=DB::table('academic_archive_file')
            ->where('id','=',$id)
            ->value('file');

            /*for share hosting: $filepath = str_replace("/public", "",$filepath);*/
  if(File::exists(public_path($filepath))){

  File::delete(public_path($filepath));
  //echo "hello world";
}

else{

  dd('File does not exists.');
}          

   $foreign_id=DB::table('academic_archive_file')
               ->where('id','=',$id)
               ->value('foreign_id');

    DB::table('academic_archive_file')
    ->where('id',$id)
    ->delete();
  
  $data=DB::table('academic_archive_file')
        ->where('foreign_id','=',$foreign_id)
        ->first();

  if($data)      
  {

  }
  else
  {
    DB::table('academic_archive')
    ->where('id',$foreign_id)
    ->delete();
  }
  return Redirect::back();
}
}
