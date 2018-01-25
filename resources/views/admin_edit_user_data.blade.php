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
#admin_section a
{
  padding: 5px;
}
</style>
</head>
<body>
  @include('admin_section')
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($user as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    @if($user->status==0)
    <td>Normal</td>
    @else
    <td>Teacher</td>
    @endif
      <td><a href="/admin_user_update/{{$user->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin_user_delete/{{$user->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>

  @endforeach

</table>

</body>

  @endsection