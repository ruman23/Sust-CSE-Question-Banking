 @extends('layouts.app')
 
@section('content')
<style type="text/css">

/*
a.selected
{
  background-color: red;
}*/
body
{
  height: auto;
}

#asked,#answered,#private
{
  margin-top:    20px;
  margin-bottom: 20px;
}

#nav {
  width: 70%;
  height: 60px; 
  background: #1ABC9C;
}

#nav ul {
  padding: 20px;
  margin: 0 auto;
  list-style: none;
  text-align: center;
}
#nav ul li {
  display: inline-block;
  margin: 0 10px;
}
#nav ul li a {
  padding: 10px 0;
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.2s ease;
}
#nav ul li a:hover {
  color: #34495E;
}
a.selected {
  border-bottom: 2px solid #ecf0f1;
}

#form
{
  display: none; 
}
label
{
  cursor: pointer;
}

.activity li
{
 /*text-shadow: 0 1px 0 rgba(255,255,255,.5);*/
 background-color: #555;
 line-height: 2;
 margin:0px;
 size:10px; 
 width: 450px;
 padding-left: 5px;
 font-color: white;
}

.activity li:hover
{
  background-color: #666;
}
.activity a
{
  color: white;
}
/*
.activity li:nth-of-type(odd) {
  background: lightsteelblue;
}*/



</style>
<div class="container">
  <div style="width: 20%">
             <h1 style="color: #1ABC9C">{{$user->name}}</h1>
   <img src="/img/{{$user->avatar}}" id="img" style="width: 150px; height: 150px; margin-right: 25px;">
      @if(Auth::user())
   @if(Auth::user()->status==1)
    <span title="Teacher">
      <i class="fa fa-graduation-cap" style="float: right; font-size:24px;color: green"></i>
    </span>
     
   @endif
   @endif
 </div>
 


   @if(Auth::user())
   @if($user->id==Auth::user()->id)
   <label id="change">Change Profile Image</label>
   <div id="form">
   <form method="post" action="/update-profile" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0"> 
   <input type="file" id="file" name="avatar" style="margin-bottom: 5px">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-sm btn-primary">	
   </form>
   </div>
   @endif
   @endif


<div id="nav">
  <ul>
  <li><a href="#asked">Asked Questions</a></li>
  <li><a href="#answered">Answered Questions</a></li>  
  <li><a href="/academic_archive_file_view_current_user/{{$user->id}}">Uploaded Exam question</a></li>
  @if(Auth::user())
  @if($user->id==Auth::user()->id && Auth::user()->status==1)
  <li><a href="#private">Private Questions</a></li>
  @endif
  @endif  
  </ul>
</div>

<!--
<nav>
  <ul>
    <li><a href="#asked">Asked Questions</a></li>
    <li><a href="#answered">Answered Questions</a></li>
  </ul>
</nav>
-->

<div id="asked" class="activity" style="display: none;">
  @foreach($asked as $asked)
  <li>
   <a href="/show_question/{{$asked->id}}">{{$asked->title}}</a>
 </li>
  @endforeach
</div>

<div id="answered" class="activity" style="display: none;">
  @foreach($answered as $answered)
  <li>
   <a href="/show_question/{{$answered->id}}">{{$answered->title}}</a>
 </li>
  @endforeach
</div>

 <div id="private" class="activity" style="display: none;">
  @foreach($private as $private)
  <li>
   <a href="/show_question/{{$private->id}}">{{$private->title}}</a>
 </li>
  @endforeach
  </div>

<script type="text/javascript">
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#file").change(function() {
  readURL(this);
});

$("#nav a").click(function(e){
   // e.preventDefault();
    $(".activity").hide();
    var toShow = $(this).attr('href');
    $(toShow).show();
});

$("#nav a").on('click', function(){
    $('a').removeClass('selected');
    $(this).addClass('selected');
});

$("#change").on('click',function()
{
      console.log($("#form"));
     $('#form').toggle();
});  

</script>

@endsection
