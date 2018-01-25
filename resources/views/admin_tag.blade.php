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
 

 <a href="/admin_add_tag"><h3>Add New tag</h3></a>
 
 <br>
  <tr>
    <th>Tag Name</th>
    <th>Content</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($tag as $tag)
  <tr>
    <td>{{$tag->tag_name}}</td>
    <td>{{$tag->content}}</td>
      <td><a href="/admin_update_tag/{{$tag->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin_delete_tag/{{$tag->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
  @endforeach

</table>

</body>

  @endsection