   @extends('layouts.app')

   @section('content')
   
   <head>
     <link rel="stylesheet" href="{{ URL::asset('own/lightbox/dist/css/lightbox.css')}}" />

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



<div class="row" style="padding-top: 10px;">
  @foreach($data as $data)
  <div class="col-md-3 ">
    <div class="thumbnail">

      <a  href="/arc/{{$data->session}}"> <button style="width: 100%;height: 100%" type="button" class="btn">Session:{{$data->session}}</button>   </a>
    </div>
    


  </div>
  @endforeach
<!--
    <a href="www.example.com/example.html" target="_blank">link text</a>
    <iframe>  <embed src="{{ URL::asset('pdf/test.pdf') }}" width="600" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
</iframe>
-->
<!--a href="{{ URL::asset('pdf/test.pdf') }}" target="_blank">Read more</a-->
</div>
</div>
</body>
<script src="own/lightbox/dist/js/lightbox.js"></script>
@endsection