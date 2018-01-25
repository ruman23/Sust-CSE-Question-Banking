 @extends('layouts.app')

@section('content')
<style type="text/css">
	.single-ques
	{
		background-color: #E1E1E1;
		margin: 5px;
		text-align: center;
		text-decoration: none;
    padding: 5px; 
	}
	.title
	{
		font-size: 30px;
		text-align: center;
		margin-bottom: 10px;
    color: #6D9C91;
	}
  img
  {
    height: 60px;
  }
  #date
  {
    padding:0;
    text-align: left;
    display: inline;
    padding-right: 35%;
  }
  #answer
  {
    padding:0;
    text-align: right;
    display: inline;
    padding-left: 35%;
  }
  #dateAnswer
  {
    margin-top: 10px;
  }
  #all_tag 
  {
    float: left;
  }
  .tag
  {
    background-color: #b9a7a7;
    padding: 5px;
  }
  .sort
  {
    padding: 5px;
    font-size: 20px;
  }
  .sort:hover
  {
    background-color: #D3D3D3;
    font-color: white;
  }

</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <span class="sort"><a href="/home_tag/{{$tag_id}}">Latest Question</a></span>
         <span class="sort"><a href="/home_tag/vote/{{$tag_id}}">Most Voted Question</a></span>

@if(Auth::user())
@if(Auth::user()->status==1)
          <span class="sort"><a href="/home_tag/teacher/{{$tag_id}}">Teacher's Question</a></span> 
@endif
@endif          

            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{$title}}</h1></div>
                <div class="panel-body">
                  <?php
                   $i=0;
                  ?>
                @foreach($list as $ques_list)
   <a href="/show_question/{{$ques_list->id}}">
   <div class="single-ques">                
                <div class="title">{{$ques_list->title}}</div>
                <div id="clear"></div> 
                  <?php
       $data=$ques_list->content;
       $content=htmlspecialchars_decode($data);
       echo $content;
                  ?>
                  <div id="clear"></div>
                  <div id="all_tag">
                   
                  @php
                  $newtag = json_decode($ques_tag[$ques_list->id], true);
                  @endphp
                  @foreach($newtag as $ntag) 
                  <span class="tag">{{$ntag["tag_name"]}}</span>
                  @endforeach
 
                  </div>
                  <br>
                  <div id="dateAnswer">
                    <div id="date">{{$ques_list->created_at}}</div>
                    <div id="answer">
                    @if($total_answer[$loop->index]==0)  
                    no answer yet
                    @else
                    {{$total_answer[$loop->index]}} Comments
                    @endif
                  </div>
                </div>

                 </div>
                @endforeach
                @include('pagination.default', ['paginator' => $list]);
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
