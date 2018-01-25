$(document).ready(function(){
   var user_id;
  // setInterval(call, 5000);
   call();
   $("#notification").click(function(){
    // console.log("Hello!"); 
    //data-toggle="modal"  data-target="#myModal"
     $("#number_notification").hide();
     $("#notification").attr("data-toggle", "modal");
     $("#notification").attr("data-target", "#myModal");
     
     
    $.ajaxSetup({
     headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });

   $.ajax({
     type: "POST",
     url: "/remove_notification", 
     success: function()
     {
         console.log("remove");
        // call();
     }
   }); 

   });

   function call()
   {
     console.log("hello");
   user_id=$('#user_id').val();
   $.ajaxSetup({
   headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });
  
   	$.ajax({
      type: "POST",
      url: "/check_notifications",
      data: 'user_id='+user_id, //the user_id variable is used as user_id in next controller 
      success: function(data)
      {
      	console.log(data);
      	if(data.notification_count!=0)
      		$("#number_notification").show(); 
      	for(var i=0;i<5;i++)
      	{
      	var url="/show_question/"+data.activity_list[i].id;
      		//$(".modal-body").html
    //  $(".modal-body").append( "<div><a href="'/show_question'+data.activity_list[i].id">'data.activity_list[i].name' answered your question -'data.activity_list[i].title'</div>" );
     // $(".modal-body").append("<div class="notification_list">"+data.activity_list[i].name+" answered your question "+data.activity_list[i].title+"</div>")
        $("#notification-body").append("<div class='notification_list'><li>"+"<a href="+url+">"+data.activity_list[i].name+" answered your question "+'" '+data.activity_list[i].title+' "'+"</a></li></div>");
      		//console.log(data.activity_list[i].title);
     // 		var url="/show_question/"+data.activity_list[i].id;
    //$(".modal-body").append("<a href='"+url+"'>"+Keno amon hoy+"</a>");
   //  $(".modal-body").append('<p><a href='+url+'>'+"Google"+'</a></p>');
      		console.log(data.activity_list[i].id);
      	}
      	//console.log("hoichere"); 
      	
      	$("#number_notification").text(data.notification_count);
      }
   	});

   }
});