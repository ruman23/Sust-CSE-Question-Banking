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
   						<h1 class="display-3">Add Quesion</h1>

   						<form   id="upload" method="post"  action="{{action('academicArchiveController@store')}}" enctype="multipart/form-data" > 
   							{{ csrf_field() }}

 
   							<select name="subject" class="form-control" required>
   								<option disabled selected hidden value="">Select Subject</option>
                           @foreach($subject as $subject)
         <option value="{{$subject->subject_name}}">{{$subject->subject_name." - ".$subject->subject_code }}</option>
                           @endforeach
   							</select>
   							<br>
   							<select name="semester" class="form-control" required>
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
   							<br>
   							<!-- session start--> 
   							<select required="true" class="form-control" name="session" id="session">
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
   							<br>
   							<input class="form-control" type="text" placeholder="Teacher's Name" name="teacher">
   							<br>

   							<!-- question type started-->       
   							<select  required id="type" class="form-control" name="type">
   								<option disabled selected hidden value="" >Please select a Question Type</option>
   								<option value="Final">Final</option>

   							</select>  

   							<script type="text/javascript">

   								var select, i, option;

   								select = document.getElementById( 'type' );

   								for ( i = 1; i <= 10; i += 1 ) {
   									option = document.createElement( 'option' );
   									option.value = option.text = i;
   									select.add( option );
   								}
   							</script>
   							<!-- question type ended--> 
   							<br>

   							<div class="form-group">
   								<input required="" type="file" class="form-control-file" id="exampleFormControlFile1"  name="image[]" multiple>
   							</div>

   							<div>
   								<button type="submit" class="btn btn-sreach btn-primary" name="add" style="margin-bottom: 50px; float: right;" ><i class="fa  fa-plus fa-lg" aria-hidden="true"></i> Add</button>
   							</div>
   							
   						</form>

   					</div>
   				</div>


   			</div>
   			<div class="col-xs-2 column3">

   			</div>
   		</div>
   	</div>
   </body>
   @endsection