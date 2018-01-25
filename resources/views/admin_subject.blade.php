     @extends('layouts.app')
 
  @section('content')
  
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
@include('admin_section')
<table>
 

 <a href="/admin_add_subject"><h3>Add New Subject</h3></a>
 
 <br>
  <tr>
    <th>Subject Name</th>
    <th>Subject Code</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($subject as $subject)
  <tr>
    <td>{{$subject->subject_name}}</td>
    <td>{{$subject->subject_code}}</td>
      <td><a href="/admin_update_subject/{{$subject->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin_delete_subject/{{$subject->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
  @endforeach

</table>

</body>

  @endsection