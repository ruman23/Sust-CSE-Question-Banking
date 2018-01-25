 @extends('layouts.app')
 
  @section('content')
<html>
<head>
	<title>SUST Question Bank</title>
	<style type="text/css">
    .orange
    {
      color: orange;
    }
    .red
    {
      color: red;
    } 
		h1
		{ 
			text-align: center;
		}
    p
    {
      margin: 0;
      padding: 0;
    }
		#tag
		{
			background-color: #808080;
			margin: 2px;
		}
		.vote-span{
  width: 60px;
  float: left;
  margin: 5px 0;
}
.update-span
{
  width: 60px;
  float: right;
  margin: 5px 0;
}
.privacy
{
  width: 38px;
  float: right;
  margin: 5px 0;
  margin-top: 20px;
}
.update-span-cnt
{
  float: right;
}
.update-com-cnt
{
  display: none;
}
.vote, .vote-score{
  clear: both;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  text-align: center;
  color: #333;
  font-size: 1.8em;
  font-weight: bold;
}
.vote-score{cursor: text}
#myModal,#quesModal
{
  display: none;
  text-align: center;
}
#right_ans
{
  margin-left: 5px;
  margin-top: 0px;
}
.selected
{
   color: green;
}
.cmt-cnt
{
  border-bottom-color: red;
}
.yes-remove-cnt
{
  margin-right: 5px;
}
.no-remove-cnt
{
  margin-left:  5px;
}
.yes-remove-ques
{
  margin-right: 5px;
}
.no-remove-ques
{
  margin-left:  5px;
}
img
{
  width: 50%;
  height: 50%;
}



	</style>
  
<!-- <link type="text/css" rel="stylesheet" href="{{URL::asset('css/style(ans).css')}}"> -->
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/example(ans).css')}}">
<script type="text/javascript" src="{{URL::asset('js/voting.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/updateQues.js')}}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body> 
  
     <h1>{{$question[0]->title}}</h1>
    

 <div id="quesModal" class="quesModal">
 <div class="modal-dialog">
 <div class="modal-content">
           <div class="modal-body">
  <h3>Do you want to delete the Question ?</h3>
          <button class="yes-remove-ques" style="width: 25%;background-color: #fc7169;color: white">Yes</button>
          <button class="no-remove-ques" style="width: 25%;background-color: #b6bece;color: white">NO</button>
        </div>
 </div>
</div>
</div>


    <input type="hidden" id="vote" value="{{$vote}}">

<div title="{{$submitter->name}}">
<a href="/profile/{{$submitter->id}}">    
<img src="{{URL::asset('/img/')}}{{'/'.$submitter->avatar}}" style="width: 55px;height: 55px;border-radius: 50%;margin-bottom: 5px;">   
</a>
</div>

    <div class="wrap">
   
     <div class="vote-span"><!-- voting-->
        <div class="vote" data-action="up" title="Vote up" id="up">
          <i class="fa fa-chevron-up"></i>
        </div><!--vote up--> 
        <div class="vote-score" id="vote-score">{{$question[0]->upvote-$question[0]->downvote}}</div>
        <div class="vote" data-action="down" title="Vote down" id="down">
          <i class="fa fa-chevron-down"></i>
        </div><!--vote down-->
        
        @if(Auth::user())
        @if(Auth::user()->id==$question[0]->user_id)
        @if($submitter->status==1)
        <div class="privacy" title="Private" id="private">
          <i class="fa fa-lock fa-2x"></i>
        </div>
        <!--
        <div class="privacy" title="Public" id="public" style="display: none;">
          <i class="fa fa-unlock"></i>
        </div>  -->

        @elseif($question[0]->privacy_status==0)
        <div class="privacy" title="Public" id="public">
          <i class="fa fa-unlock fa-2x"></i>
        </div>
        <!--
          <div class="privacy" title="Private" id="private" style="display: none;">
          <i class="fa fa-lock"></i>
        </div>  -->
        @else
        <div class="privacy" title="Teachers Only" id="teachers_only">
          <i class="fa fa-unlock-alt fa-2x"></i>
        </div>
        @endif
        @endif
        @endif

      </div>


      @if(Auth::user())
      @if(Auth::user()->id==$question[0]->user_id)
      <div class="update-span">
        <div class="edit" title="edit" id="edit" style="color: #546E7A">
          <i class="fa fa-pencil-square-o fa-3x"></i>
        </div>
        <div class="remove-ques" title="remove" id="remove" style="color: red">
             <i class="fa fa-remove fa-3x"></i>
        </div>
      </div>
      @endif
      @endif
      </div>
 
<div class="content">
  <input type="hidden" name="" id="ques_content" value="{{$question[0]->content}}">
   <?php
       $data=$question[0]->content;
       $content=htmlspecialchars_decode($data);
       echo $content;
    ?>
      <div id="clear"></div>

  <div id="all_tag">
  @foreach($tag as $tag)
  <span class="tag" style="color: white">{{$tag->tag_name}}</span>
  @endforeach 
  </div>
</div>  

  <div id="clear"></div>

<div id="clear"></div>

<input type="hidden" id="ques_id" value={{ Request::route('id') }}>

<div class="cmt-container" >

    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
<div class="clear"></div>

    <div class="new-com-cnt">
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>

    <div class="clear"></div>
 
    
     @foreach($answer as $answer)
    <div class="cmt-cnt">

  <div class="comment">
      @if(Auth::user())
  @if(Auth::user()->id==$answer->user_id)
      <div class="update-span-cnt">
        <div class="edit-cnt" title="edit" id="edit-cnt" style="color: #546E7A">
          <i class="fa fa-pencil-square-o"></i>
        </div>
        <div class="remove-cnt" title="remove" id="remove-cnt" style="color: red">
             <i class="fa fa-remove"></i>
        </div>
      </div>
     @endif
     @endif

        <img src="/img/{{$answer->avatar}}" />
        <div class="thecom">
            <h5>{{$answer->name}}</h5>
            <span data-utime="1371248446" class="com-dt">{{$answer->created_at}}</span>
            
            @if(AUth::user())
            @if(Auth::user()->id==$question[0]->user_id)
            @if($answer->selected==0)
            <span class="right_ans"><i class="fa fa-check"></i></span>
            @endif
            @endif
            @endif

            @if($answer->selected==1)
            <span class="right_ans selected" title="Answer is selected as right"><i class="fa fa-check"></i></span>
            @endif

            <br/>
            <p>
            {{$answer->content}}
            </p>
            <input type="hidden" name="" class="answerId" value=" {{$answer->id}} ">
        </div>
  </div>

 
      <div class="update-com-cnt">
        <textarea class="update-new-com"></textarea>
        <div class="update-bt" >Update</div>
        <div class="cancel-bt">Cancel</div>
    </div>

 <div id="myModal" class="myModal">
 <div class="modal-dialog">
 <div class="modal-content">
           <div class="modal-body">
  <h3>Do you want to delete the comment ?</h3>
          <button class="yes-remove-cnt">Yes</button>
          <button class="no-remove-cnt">NO</button>
           </div>
</div>
</div>
</div>

    </div>
     @endforeach 
 
<!--     -->

  <!-- Modal -->
  <!--
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">

        <div class="modal-body">
  <h3>Do you want to delete the comment ?</h3>
        <div class="update-bt">Yes</div>
        <div class="cancel-bt">No</div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-basic" data-dismiss="modal">Close</button>
        </div>
      
    </div>
  </div>
</div>
-->
 
<!--    -->

</div><!-- end of comments container "cmt-container" -->

<script type="text/javascript">
  var updateanswer;
  var answerId;
  var currentAnswer;
   $(function(){ 
   $('.myModal').hide();
   $('.quesModal').hide();
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('.privacy').click(function(){
   var questionId=$('#ques_id').val();
   var title=$(this).attr('title');
  // $("#private").hide();
  // $("#public").show();
   $.ajax({
        type: "POST",
        data: 'title='+title,
        url: "/change_privacy/"+questionId,
        success: function()
        {
           if(title=="Private")
           {
             $('.privacy').html('<i class="fa fa-unlock-alt fa-2x"></i>');
            // $('.privacy').attr('title','Public');
             $('.privacy').attr('title','Teachers Only'); 
           }
           else if(title=="Teachers Only")
           {
             $('.privacy').html('<i class="fa fa-unlock fa-2x"></i>');
             $('.privacy').attr('title','Public');
           }
           else
           {
              $('.privacy').html('<i class="fa fa-lock fa-2x"></i>');
              $('.privacy').attr('title','Private');
           }
        }
   });
});

$('.right_ans').click(function(){
   answerId=$(this).parent().find('.answerId').val();
   console.log(answerId);
   $(this).addClass("selected");
   $.ajax({
       type: "POST",
       url: "/select-answer/"+answerId,
       success: function()
       {
         console.log("3:08");
       }
   });
});

$('.')

        $('.edit-cnt').click(function(event){
        //console.log($(this).parent().parent().find('p').text());    
            $(this).parent().parent().hide();
            $(this).parent().parent().parent().find('.update-com-cnt').show();
            $(this).parent().parent().parent().find('.update-new-com').html($(this).parent().parent().find('p').html());
        console.log($(this).parent().parent().find('p').html());
            answerId=$(this).parent().parent().find('.answerId').val();
        });
        
       $('.remove-cnt').click(function()
       {
         console.log("why");
        //  $('#myModal').show();
          //$(this).parent().find('#myModal').show();
        $(this).parent().parent().parent().find('#myModal').show();   
       }); 

      
      $('.yes-remove-cnt').click(function()
      {
           answerId=$(this).parent().parent().parent().parent().parent().find('.answerId').val();
           $(this).parent().parent().parent().parent().parent().remove();
           console.log(answerId);
           $.ajax({
               type: "POST",
               url: "/remove-answer/"+answerId,
               success: function(e)
               {
                  $('.myModal').hide();
               }
           });
      });

      $('.no-remove-cnt').click(function()
      {
          $('.myModal').hide();
      });

      $('.remove-ques').click(function()
       {
            $(this).parent().parent().parent().find('.quesModal').show();
       });

       $('.yes-remove-ques').click(function()
        {
          var questionId=$('#ques_id').val();
          console.log(questionId);
          $.ajax(
          {
            type: "POST",
            url: "/remove_question/"+questionId,
            success: function()
            {
               window.location.href = "/home/";   
            }
          });
        });

       $('.no-remove-ques').click(function(){
           $('.quesModal').hide();
       });

       $('.update-bt').click(function()
       {
           // var updateComment=
           updateanswer=$(this).parent().find('.update-new-com').val();//.parent().find('update-new-com');
           currentAnswer=$(this).parent().parent().find('p').html(updateanswer);
          // console.log(currentAnswer);
           console.log(answerId);
           console.log(updateanswer);
           if(!updateanswer)
           {
             alert('You need to write a comment!');
           }
           else
           {
              $.ajax({
                 type: "Post",
                 url: "/edit-answer/"+answerId,
                 data: 'updateAns='+updateanswer, 
                 success: function(e)
                 {
                     console.log("well done rana!");
                    $(".update-com-cnt").hide();
                    $(".comment").show();      
                 }
              });
           }
       });

       $('.cancel-bt').click(function()
         {
                    $(".update-com-cnt").hide();
                    $(".comment").show();
         });

        $('.new-com-bt').click(function(event){    
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        /* when start writing the comment activate the "add" button */
        $('.the-new-com').bind('input propertychange', function() {
           $(".bt-add-com").css({opacity:0.6});
           var checklength = $(this).val().length;
           if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });

        /* on clic  on the cancel button */
        $('.bt-cancel-com').click(function(){
            $('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on post comment click 
        $('.bt-add-com').click(function(){
            var theCom = $('.the-new-com');
            var theName = $('#name-com');
            var theMail = $('#mail-com');
            var ques_id = document.getElementById('ques_id');
           // window.alert(ques_id.value);

            if( !theCom.val()){ 
                alert('You need to write a comment!'); 
            }else{ 
                $.ajax({
                    type: "POST",
                    url: "/add-answer/"+ques_id.value, 
                    data: 'act=add-com&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                    success: function(html){
                        theCom.val('');
                        theMail.val('');
                        theName.val('');
                        $('.new-com-bt').after($('.new-com-cnt'));
                        $('.new-com-cnt').hide('fast', function(){
                            $('.new-com-bt').show('fast');
   

       var newAns=document.createElement("div");
       newAns.className="cmt-cnt";

        var img=document.createElement("img");
        img.src="/img/"+html.image;
        img.alt="";
        img.style.height="35px";
        img.style.width="35px";

        var thecom=document.createElement("div");
        thecom.className="thecom";

        var h5=document.createElement("h5");
        h5.innerHTML=html.name;
        var span=document.createElement("span");
        span.className="com-dt";
        span.innerHTML="{{date('d-m-Y H:i')}}";
        var br=document.createElement("br");
        var p=document.createElement("p");
        p.innerHTML=html.msg;
 
        thecom.append(h5,span,br,p);
        newAns.append(img,thecom);

                            $('.new-com-cnt').after(newAns);  
                        })
                    }  
                });
            }
        });
 
    });
</script>


</body>
</html>
@endsection