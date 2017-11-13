@extends('layout.main')
@section('title','Edit new Comment')

@section('content')
    @include('layout.errmsg')
    <form action="{{route('comments.update',$comment->id)}}" method="post" role="form">
        <input type="hidden" name="_method" value="PUT" />
        {{csrf_field()}}
        <legend>Edit Comment</legend>

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name" id="name" value="{{$comment->name}}" placeholder="Input...">
        </div>

        <div class="form-group">
            <label for=""></label>
            <textarea class="form-control" rows="4" name="comment">{{$comment->comment}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit Comment</button>
    </form>


@endsection