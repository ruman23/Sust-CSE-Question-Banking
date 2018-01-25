$(document).ready(function()
{
  $('.edit').click(function()
{
    //console.log("hello");
    //window.location.href = "http://stackoverflow.com";
    var value=document.getElementById("ques_id").value;
    //console.log(value);
    window.location.href = "/edit_question/"+value;	
});
  
});
