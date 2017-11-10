@extends('layout.main')
@section('title','Add new Comment')

@section('content')
@include('layout.errmsg')
    <form action="{{route('comments.store')}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Add new Comment</legend>

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Input...">
        </div>

        <div class="form-group">
            <label for=""></label>
           <textarea class="form-control" rows="4" name="comment"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>


    @endsection