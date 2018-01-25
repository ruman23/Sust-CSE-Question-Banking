  @extends('layouts.app')
 
  @section('content')

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SUST Question Bank</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script type="text/javascript"> 

var oDoc, sDefTxt; 
 
function initDoc() {
  oDoc = document.getElementById("textBox");
  sDefTxt = oDoc.innerHTML;
  if (document.compForm.switchMode.checked) { setDocMode(true); }
}

function formatDoc(sCmd, sValue) {
  if (validateMode()) 
    { 
      document.execCommand(sCmd, false, sValue); 
      oDoc.focus(); 
    }
}

function validateMode() {
  if (!document.compForm.switchMode.checked) { return true ; }
  alert("Uncheck \"Show HTML\".");
  oDoc.focus();
  return false;
}

function setDocMode(bToSource) {
  var oContent;
  if (bToSource) {
    oContent = document.createTextNode(oDoc.innerHTML);
    oDoc.innerHTML = "";
    var oPre = document.createElement("pre");
    oDoc.contentEditable = false;
    oPre.id = "sourceText";
    oPre.contentEditable = true;
    oPre.appendChild(oContent);
    oDoc.appendChild(oPre);
  } else {
    if (document.all) {
      oDoc.innerHTML = oDoc.innerText;
    } else {
      oContent = document.createRange();
      oContent.selectNodeContents(oDoc.firstChild);
      oDoc.innerHTML = oContent.toString();
    }
    oDoc.contentEditable = true;
  }
  oDoc.focus();
}

</script>
<style type="text/css">
input[type=text], select {
    width: 50%;
    padding: 6px 10px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.intLink { cursor: pointer; }
img.intLink { border: 0;margin: 2px;padding-right: 2px }
#toolBar1 select { font-size:10px; }
#textBox {
  margin-top: 2px;
  width: 450px;
  min-height: 200px;
  border: 1px #000000 solid;
  padding: 12px;
    line-height:15px;
    transition: width 0.25s;
    resize:none;
    overflow:hidden;
}
#textBox #sourceText {
  padding: 0;
  margin: 0;
  min-width: 498px;
  min-height: 200px;
}
#title
{
  margin-bottom: 15px;
  min-width: 450px;
      transition: height 0.25s;
    resize:none;
    overflow:hidden;
}
#textBox ul,li 
{
  list-style: unset;
}
#editMode label { cursor: pointer; }
.select2.select2-container.select2-container--default
{
  width: 500px;
}
img {
  max-width:250px;
  max-height:250px;
}
.ques_status
{
  float: right;
}
</style>
</head>
<body onload="initDoc();">
<form name="compForm" id="mainForm" method="post" action="{{ action('QuestionSubmitController@submit') }}" onsubmit="if(validateMode()){this.myDoc.value=oDoc.innerHTML;return true;}return false;" enctype="multipart/form-data">
@if(Auth::user()->status==1)
<div class="ques_status">
  <label>Who can see the question</label> 
  <br>
<input type="radio" name="privacy" value="public" checked> ALL<br>
<input type="radio" name="privacy" value="private"> Only Me<br>
<input type="radio" name="privacy" value="teachers_only"> Teachers Only<br>
</div>
@endif

<input type="hidden"  name="_token" value="{{ csrf_token() }}">
@if($update==1)
<input type="hidden" name="myDoc" value="{{$ques_content}}">
@endif
@if($update==0)
<input type="hidden" name="myDoc">
@endif
<input type="hidden" name="ques_id" value="{{$ques_id}}">
<div id="toolBar2">
<label>Title</label>  
<br>
<input type="text" name="title" id="title" placeholder=" Title">
<br>
  
<img class="intLink" title="Bold" onclick="formatDoc('bold');" src={{ URL::asset("img/bold.png") }} />

<img class="intLink" title="Italic" onclick="formatDoc('italic');" src={{ URL::asset("img/italic.png") }} />
<img class="intLink" title="Underline" onclick="formatDoc('underline');" src={{ URL::asset("img/underline.png") }} />
<img class="intLink" title="Left align" onclick="formatDoc('justifyleft');" src={{ URL::asset("img/left_align.png") }} />
<img class="intLink" title="Center align" onclick="formatDoc('justifycenter');" src={{ URL::asset("img/center_align.png") }} />
<img class="intLink" title="Right align" onclick="formatDoc('justifyright');" src={{ URL::asset("img/right_align.png") }} />
<img class="intLink" title="Numbered list" onclick="formatDoc('insertorderedlist');" src={{ URL::asset("img/numbered_list.png") }} />
<img class="intLink" title="Dotted list" onclick="formatDoc('insertunorderedlist');" src={{ URL::asset ("img/dotted_list.png") }} />
<img class="intLink" title="Hyperlink" onclick="var sLnk=prompt('Write the URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){formatDoc('createlink',sLnk)}" src={{ URL::asset ("img/hyperlink.png") }} />

<img class="intLink" title="upload image from web" onclick="var sLnk=prompt('Write image URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){formatDoc('insertImage',sLnk)}" src={{ URL::asset ("img/picture.png") }} />

<img class="intLink" title="upload image from PC" onclick="file_PC()" src={{ URL::asset ("img/picture.png") }} />

<input type="file" id="my_file" style="display: none;" />

</div>

@if($update==1)
<div id="textBox" contenteditable="true">

<?php
  echo (htmlspecialchars_decode($ques_content));
?>
 
</div>
@endif
@if($update==0)
<div id="textBox" contenteditable="true"></div>
@endif

<input type="hidden" name="ques_id" value="{{$ques_id}}">

<div id="clear"></div>

    <div class="tag-box">
           <div class="form-group">
               <label for="users">Add Tag</label>
               <br>
          <select name="tag_id[]" id="users" class="form-control" multiple="multiple">
               </select>
           </div>
    </div>
 
 <div id="clear"></div>

<p id="editMode"><input type="hidden" name="switchMode" id="switchBox" onchange="setDocMode(this.checked);" />   </p>

<button type="submit" class="btn btn-primary">Submit</button>
<!-- <input type="submit" value="Submit" />  -->

</form>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   
   <script type="text/javascript">

    function file_PC()
    {
    //  console.log("hello rana!");
      $("input[id='my_file']").click();
    }

      $("#my_file").on('change',function(){
        //do whatever you want
        file_upload();
       });


    function file_upload()
    {
        
      var fileInput = document.getElementById('my_file');
      var ifile=fileInput.files[0];   
      var filename = fileInput.files[0].name;
      console.log(filename);

    //  var form = document.forms.namedItem("compForm");
      var form=$("#mainForm");
      var formdata = new FormData(form);
      console.log(formdata);

      var file_data = $('#my_file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
      
  $.ajaxSetup({
     headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });

   $.ajax({
     type: "POST",
     url: "/upload_file_PC", 
                    contentType : false,
                processData : false,
    // data: 'file='+formdata,
      data: form_data,
     success: function($data)
     {
        // console.log($data.filePath);
        // call();
        formatDoc('insertImage',$data.filePath)
     }
   });

    }

     $('#textBox').on({input: function(){
    var totalHeight = $(this).prop('scrollHeight') - parseInt($(this).css('padding-top')) - parseInt($(this).css('padding-bottom'));
    $(this).css({'height':totalHeight});
}
});
    $('#title').on({input: function(){
    if($(this).prop('scrollWidth')>= parseInt($(this).css('min-width')) )
    { 
   // window.alert($(this).prop('scrollWidth')+" "+$(this).css('min-width')); 
    var totalWidth = $(this).prop('scrollWidth') - parseInt($(this).css('padding-left')) - parseInt($(this).css('padding-right'));
    $(this).css({'width':totalWidth});
    }
}
});
   </script>

    <script>

        $(document).ready(function(){
            $('#users').select2({
                placeholder : 'Please select Tag',
                tags:true,
                ajax : {
                    url : '/api/tags',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            q : params.term,
                            page : params.page
                        };
                    },
                    processResults : function(data, params){
                        params.page = params.page || 1;

                        return {
                            results : data.data,
                            pagination: {
                                more : (params.page  * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength : 1,
                templateResult : function (repo){
                    if(repo.loading) return repo.tag_name;

                    var markup = repo.tag_name;

                    return markup;
                },
                templateSelection : function(repo)
                {
                    return repo.tag_name;
                },
                escapeMarkup : function(markup){ return markup; }
            });
        });
    </script>


</body>
</html>
@endsection