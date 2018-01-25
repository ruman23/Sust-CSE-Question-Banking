<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
  
Route::get('/welcomet', function () {
    return view('welcomet');
});


Route::get('/tag2', function () {
    return view('tag2');
});

Route::get('/tag','TagController@all');
Route::get('/tag/{id}','TagController@specific');
 
Route::get('/users','ShowUsersController@index');

/*
Route::get('/tag', function () {
    return view('tag');
});
*/
  
Route::get('/api/tags',function(){
return App\tag::where('tag_name','LIKE','%'.request('q').'%')->paginate(10);
});
 
 
Auth::routes(); 

Route::get('/home', 'HomeController@index'); 
Route::get('/home/vote', 'HomeController@index_vote'); 
Route::get('/home/teacher', 'HomeController@index_teacher');

Route::get('/home_tag/{id}', 'TagController@specific');
Route::get('/home_tag/vote/{id}', 'TagController@specific_vote'); 
Route::get('/home_tag/teacher/{id}', 'TagController@specific_teacher'); 
 
Route::get('/profile/{id}','UserController@profile'); 
Route::post('/update-profile','UserController@update');

Route::get('/notification/{id}','NotificationController@index');

/*
Route::get('/ask_question',function()
{
      return view('ask_question'); 
});
*/



Route::post('/question_submit','QuestionSubmitController@submit');

Route::get('/show_question/{id}','QuestionSubmitController@show');

Route::get('/edit_question/{id}','QuestionEditController@index');

Route::post('/remove_question/{id}','removeQuesAnsController@question');
/*
Route::get('/show_question',function()
{
      return view('show_question'); 
});
*/
   

Route::get('autocomplete-search',array('as'=>'autocomplete.search','uses'=>'TagController@index'));

Route::get('autocomplete-ajax',array('as'=>'tagcomplete.ajax','uses'=>'TagController@ajax'));

Route::post('/add-answer/{id}','AnswerSubmitController@submit');
Route::post('/edit-answer/{id}','AnswerSubmitController@edit');
Route::post('/remove-answer/{id}','removeQuesAnsController@answer');

Route::post('/select-answer/{id}','AnswerSubmitController@select');

Route::post('/voting/{id}','VotingController@submit');

Route::get('/academic_archive', function () {
    return view('academic_archive');
});

Route::post('/academic_archive_submitted','academicArchiveController@store');

Route::get('/academic_archive_file_view', function () {
    return view('academic_archive_file_view');
});

Route::get('/test',function()
{
   return view('test');
});

Route::post('/check_notifications','NotificationController@index');


/***added by me***/

Route::get('/academic_archive_choice', function () {
    return view('academic_archieve_welcome');
});

/*
Route::get('/academic_archive', function () {
    return view('academic_archive');
});
*/




Route::post('/academic_archive_submitted','academicArchiveController@store');

Route::get('/academic_archive_file_view', function () {
    return view('academic_archive_file_view');
});
 
Route::get('/academic_archive_file_view','academicArchiveController@show');

Route::post('/academic_archive_file_view','academicArchiveController@search');


Route::get('/academic_archive_album_view', function () {
    return view('academic_archive_album_view');
});

Route::get('/academic_archive_album_view','academicArchiveController@album');

Route::get('/arc/{id}','academicArchiveController@sessionToSemester');

Route::post('/remove_notification','NotificationController@remove');
 
Route::post('/upload_file_PC','UploadController@upload');

Route::get('/academic_archive_semester_view', function () {
    return view('academic_archive_semester_view');
});

Route::get('/arc/{session}/{semester} ','academicArchiveController@semesterToSubject');

Route::get('/academic_archive_subject_view', function () {
    return view('academic_archive_subject_view');
});

Route::get('/arc/{session}/{semester}/{subject} ','academicArchiveController@subjectToFile');


Route::get('/academic_archive_file_view_current_user/{id}','UserController@archieveForCurrentUser');  

Route::get('/remove/{file_id}','academicArchiveController@remove');
 
Route::post('/change_privacy/{ques_id}','QuestionEditController@privacy'); 

Route::get('/admin_page','adminController@index');
Route::get('/admin_page_subject','adminController@subject');
Route::get('/admin_page_tag','adminController@tag');
   


Route::get('/admin_user_update/{id}','adminController@user_update_first');
Route::post('/admin_user_update_second','adminController@user_update_second');

Route::get('/admin_update_subject/{id}','adminController@subject_update_first');
Route::post('/admin_update_subject_second','adminController@subject_update_second');

Route::get('/admin_update_tag/{id}','adminController@tag_update_first');
Route::post('/admin_update_tag_second','adminController@tag_update_second');


Route::get('/admin_add_subject', function () {
    return view('admin_add_subject');
});

Route::post('/admin_add_subject','adminController@add_subject');
Route::get('/admin_delete_subject/{id}','adminController@subject_delete');

Route::get('/admin_add_tag', function () {
    return view('admin_add_tag');
});

Route::post('/admin_add_tag','adminController@add_tag');
Route::get('/admin_delete_tag/{id}','adminController@tag_delete');

Route::get('/admin_user_delete','adminController@user_delete');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/academic_archive','academicArchiveController@index');
    Route::get('/ask_question','AskController@index');
    });

