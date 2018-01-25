<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notification_counter;
use DB;
use View;
use Auth;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
         $user_activity=DB::table('user_activities')
                        ->where('user_id','=',$request->user_id)
                        ->latest()
                        ->first();

         $notification=DB::table('notification_counter')
                       ->where('user_id','=',$request->user_id)
                       ->first();

         if($notification)
         {

            if($user_activity->id>$notification->last_activity)
            {
               $notification_counter=notification_counter::where('user_id',$request->user_id)->first();
               //$visitor->increment('totalvisits');
               $notification_counter->count=$notification_counter->count+1;
               //$notification_counter->increment('count');
               $notification_counter->last_activity=$user_activity->id;
               $notification_counter->save();
            }

            $notification_count=DB::table('notification_counter')
                                ->where('user_id','=',$request->user_id)
                                ->value('count');

        //    echo $notification_count;
                                
          $activity_list=DB::table('user_activities')
                           ->join('users','users.id','=','user_activities.helper_user_id')
                           ->join('questions','questions.id','=','user_activities.ques_id')
                           ->orderBy('user_activities.id','desc')
                           ->select('questions.id','users.name','questions.title')
                           ->get();                    

     return response()->json(array('notification_count'=> $notification_count,'activity_list'=> $activity_list), 200);

           
         }  
         else
         {
            $notification_counter=new notification_counter;
            $notification_counter->user_id=$request->user_id;
            $notification_counter->count=0;
            $notification_counter->last_activity=$user_activity->id;
            $notification_counter->save();
         }                           
    }
    public function remove()
    {
    	echo "kire ki obosta";
    	DB::table('notification_counter')
            ->where('user_id', Auth::user()->id)
            ->update(['count' => 0]);
    }
}
