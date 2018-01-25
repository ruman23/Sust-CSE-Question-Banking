   @extends('layouts.app')

   @section('content')
   
   <head>

   </head> 

   <body>
   	<div class="container">

       <div class="row col-xs-12 align-items-cneter">
        <div class="col-xs-2 column1">

        </div>
        <div class="col-xs-8  column2 center-block">


         <div class="jumbotron jumbotron-fluid">
          <div class="container">

           <form  enctype="multipart/form-data" id="upload" method="post"  action="{{action('academicArchiveController@search')}}" > 
            {{ csrf_field() }}


            <select  name="subject" class="form-control">
             <option  hidden="true" value="null">Select Subject</option>
             @foreach($subject as $subject)
             <option value="{{$subject->subject_name}}">{{$subject->subject_name." - ".$subject->subject_code }}</option>
             @endforeach                        
           </select>
           <br>
           <select name="semester" class="form-control" >
             <option hidden="true" value="null">Select Semester</option>
             <option value="1/1">1/1</option>
             <option value="1/2">1/2</option>
             <option value="2/1">2/1</option>
             <option value="2/2">2/2</option>
             <option value="3/1">3/1</option>
             <option value="3/2">3/2</option>
             <option value="4/1">4/1</option>
             <option value="4/2">4/2</option>

           </select>  
           <br>
           <!-- session start--> 
           <select required="true" class="form-control" name="session" id="session">

             <option hidden="true">Please select a Session</option>

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
          <br>
          <div>
           <button type="submit" class="btn btn-sreach btn-primary" name="add" style="margin-bottom: 50px; float: right;" ><i class="fa  fa-search fa-lg" aria-hidden="true"></i> Search</button>
         </div>
         
       </form>

     </div>
   </div>


 </div>
 <div class="col-xs-2 column3">

 </div>
</div>




<h1 class="my-4 text-center text-lg-left">Question Paper</h1>

<div class="row text-center text-lg-left">

 @foreach($data as $data)
 <div class="col-lg-3 col-md-4 col-xs-6">
  <a  href="#" class="d-block mb-4 h-100">
    <img id="" class="img-fluid img-thumbnail" src="{{$data->file}}" alt="">
  </a>
</div>
@endforeach

</div>



</div>
<!-- /.container -->
</body>
@endsection