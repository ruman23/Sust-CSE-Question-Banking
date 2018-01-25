<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
      //return $request;
    	//return Input::all();
      // if(Input::hasFile('formdata')) 
      //  if($request->file('avatar'))
    	/*
       {
       	$avatar=Input::file('file');
       	$filename=time().'.'.$avatar->getClientOriginalExtension();
        $avatar->move(public_path().'/'.'img'.'/',$filename);
    // Image::make($avatar)->resize(300,300)->save(public_path('/img/'.$filename));

      //  $user=Auth::user();
      //  $user->avatar=$filename;
      //  $user->save();
       }
       */
       /*
               $validator = Validator::make($request->all(),
            [
                'file' => 'image',
            ],
            [
                'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
            ]);
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            ); 
            */
        $newFile=$request->file('file'); 
        $filename=time().'.'.$newFile->getClientOriginalExtension();
        $newFile->move(public_path().'/'.'img'.'/'.'ask_img'.'/',$filename);
        $filePath='/img'.'/'.'ask_img'.'/'.$filename;
      //  $extension = $request->file('file')->getClientOriginalExtension(); // getting image extension
      //  $dir = 'uploads/';
      //  $filename = uniqid() . '_' . time() . '.' . $extension;
      //  $request->file('file')->move($dir, $filename);
        return response()->json(array('filePath'=> $filePath), 200);
    }
}
