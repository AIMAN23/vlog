@extends('layouts.app')
@section('title','Comments')

@section('content')
@if (session('msg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>OK</strong> {{session('msg')}}
    </div>
@endif
@if(!Auth::guest())
@include('comments.form')
    <hr>
@endif
    @if (count($comments) > 0)
        {{$comments->links()}}
        @foreach($comments as $comment)
            <div class="well">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                       {{$comment->created_at}}
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                       <a href="{{route('profile.index',$comment->user_id)}}">
                           {{$comment->user->name}}
                       </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="{{route('comments.show',$comment->id)}}">
                            {{$comment->comment}}
                        </a>
<hr>
                        @if (!Auth::guest() && Auth::user()->isadmin == 1)
                            <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-info pull-right">Edit</a><br/>
                            <form method="post" action="{{route('comments.destroy',$comment->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        {{$comments->links()}}
        @endif

@endsection