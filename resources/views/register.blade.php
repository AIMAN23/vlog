@extends('layout.main')
@section('title','Contact Page')

@section('content')
@include('layout.errmsg')
<form action="{{route('reg')}}" method="post" role="form" enctype="multipart/form-data">
    {{csrf_field()}}
    <legend>Register</legend>

    <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}" placeholder="Enter Username...">
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="text" class="form-control" name="password" id="password"  placeholder="Enter Password...">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Enter Email...">
    </div>


    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="i,age" placeholder="Enter Image...">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection