@extends('layouts.app')

@section('content')
<head>

<style type="text/css">
.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style-6 h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select 
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #2EBC99;
}
.form-style-6 select:focus{
    background: #d2d9dd;
}
.form-style-6 select{
    -webkit-appearance: menulist-button;
    height:55px;
}
</style>    

</head>

<body>
  <div class="form-style-6">
    @include('admin_section')
<h1>Update Information</h1>
<form method="post" action="{{ action('adminController@user_update_second') }}">
<input type="hidden"  name="_token" value="{{ csrf_token() }}">
<input type="hidden"  name="user_id" value="{{$data->id}}">
<input type="text" name="name" placeholder="Name" value="{{$data->name}}">
<input type="email" name="email" placeholder="Email Address" value="{{$data->email}}" >
<label for="Status">Status:</label>
<select id="status" name="status" @if($data->status==0) value="normal" @else value="teacher" @endif >
<optgroup label="status">
  <option value="normal">Normal</option>
  <option value="teacher">Teacher</option>
</optgroup>
</select>
<br>
{{--
@if($data->status==0)
<input type="checkbox" name="admin" value="admin">Make him an Admin
@else
<input type="checkbox" name="admin" value="admin" checked>Make him an Admin
@endif
<br>
--}}

<input type="submit" value="Submit" />
</form>

</div>
</body>
@endsection