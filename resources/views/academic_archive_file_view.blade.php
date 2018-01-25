   @extends('layouts.app')

   @section('content')
   
   <head>
     <link rel="stylesheet" href="{{ URL::asset('own/lightbox/dist/css/lightbox.css')}}" />
     <style type="text/css">
     .pager{
      font-size: 150%;

    }
    .opa{
     opacity: 0.5;
   }
 </style>
</head> 

<body>
    <div class="row">

     <form  enctype="multipart/form-data" id="upload" method="post"  action="{{action('academicArchiveController@search')}}" > 
      {{ csrf_field() }}
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <select  name="subject" class="form-control" required>
         <option  disabled selected hidden  value="">Select Subject</option>
                                    @foreach($subject as $subject)
         <option value="{{$subject->subject_name}}">{{$subject->subject_name." - ".$subject->subject_code }}</option>
                           @endforeach
       </select>
       
     </div>


     <div class="col-md-3">
       <select name="semester" class="form-control"  required>
         <option disabled selected hidden value="">Select Semester</option>
         <option value="1-1">1/1</option>
         <option value="1-2">1/2</option>
         <option value="2-1">2/1</option>
         <option value="2-2">2/2</option>
         <option value="3-1">3/1</option>
         <option value="3-2">3/2</option>
         <option value="4-1">4/1</option>
         <option value="4-2">4/2</option>

       </select>  
       
     </div>
     <!-- session start--> 
     <div class="col-md-3">
       <select  class="form-control" name="session" id="session" required>

         <option disabled selected hidden value="">Please select a Session</option>

       </select> 


       <script session="text/javascript">

         var select, i, option;

         select = document.getElementById( 'session' );

         for ( i = 2010; i <= 2199; i += 1 ) {
          option = document.createElement( 'option' );
          option.value = option.text = i;
          select.add( option );
        }
      </script>
      <!-- session ended--> 
      
    </div>

    <div class="col-md-1">
     <button type="submit" class="btn btn-sreach btn-primary" name="add" style="margin-bottom: 50px; float: right;" ><i class="fa  fa-search fa-lg" aria-hidden="true"></i> Search</button>
   </div>
   <div class="col-md-1"></div>
 </form>

</div>
 <div class="container">
   @if($check==1)
   <div class="row">
    <div class="col-md-4">
      <nav aria-label="...">
        <ul class="pager">
          <li class="opa"><a href="/academic_archive_album_view"> Archieve</a> </li>
          <li class="opa"><a href="/arc/{{$data[0]->session}}/">{{$data[0]->session}}</a></li>
          <li class="opa"><a href="/arc/{{$data[0]->session}}/{{$data[0]->semester}}/">{{$data[0]->semester}}</a></li>
          <li style=" font-weight: bold;" ><a  href="/arc/{{$data[0]->session}}/{{$data[0]->semester}}/{{$data[0]->subject}}">{{$data[0]->subject}}</a></li>
        </ul>
      </nav>
    </div>
  </div>
  @endif

  <div class="row" style="padding-top: 10px;">
    @foreach($data as $datas)

    @php


    $extension = substr($datas->file, strpos($datas->file, ".") + 1);    


    @endphp

    <div class="col-md-3 ">
      <div class="thumbnail">
       <figure>
        @if($extension=="pdf" || $extension=="PDF")

        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/pdf.png" alt="pdf" class=""></a>

        @elseif($extension=="7zip" || $extension=="7ZIP"||$extension=="7z"|| $extension=="7Z" )
        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/7zip.png" alt="7zip" class=""></a> 

        @elseif($extension=="txt" || $extension=="TXT")
        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/txt.png" alt="txt" class=""></a> 


        @elseif($extension=="docs" || $extension=="DOCS"|| $extension=="docx"|| $extension=="DOCX")
        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/docs.png" alt="docs" class=""></a> 

        @elseif($extension=="RAR" || $extension=="rar" )
        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/rar.jpg" alt="rar" class=""></a> 

        @elseif($extension=="ppt" || $extension=="pptx" || $extension=="PPT" || $extension=="PPTX")
        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/ppt.png" alt="ppt" class=""></a> 

        
        @elseif($extension=="jpeg" || $extension=="jpeg" ||$extension=="GIF" || $extension=="gif"||$extension=="BMP" || $extension=="bmp" || $extension=="TIFF" || $extension=="tiff" || $extension=="PNG" || $extension=="png" || $extension=="JPG" || $extension=="jpg" )
        <a href="{{$datas->file}}"  data-lightbox="roadtrip" data-title= " {{$datas->subject}} , {{$datas->semester}}, {{$datas->session}} "><img class="img-rounded" src="{{$datas->file}}"></a>
        
        @else

        <a target="_blank" href="{{$datas->file}}"><img src="/own/images/extension/unknown.png" alt="unknown" class=""></a> 
        @endif
         <h4> {{$datas->subject}} , {{$datas->semester}} , {{$datas->session}}</h4>
        <!--  -->

        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#MoreModal">Show Infromation</button>
        
                        @if(Auth::user())
                @if(Auth::user()->id==$datas->user_id)
                <a href="/remove/{{$datas->id}}"><button type="button" class="btn btn-danger" data-dismiss="modal">delete</button></a>
                @endif
                @endif

        <div class="modal fade" id="MoreModal" role="dialog">
          <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Information</h4>
              </div>
              <div class="modal-body">
                <p>Subject {{$datas->subject}}</p>
                <p>Semester {{$datas->semester}}</p>
                <p>Session  {{$datas->session}}</p>
                <p>Question type {{$datas->type}}</p>
                <p>Course taken by {{$datas->teacher}}</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <!--  -->
      </figure>
    </div>
  </div>
  @endforeach

</div>
</div>
</body>

<script src="{{ URL::asset('own/lightbox/dist/js/lightbox.js')}}"></script>
@endsection