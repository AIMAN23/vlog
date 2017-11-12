@extends('layout.main')
@section('title','Comments')

@section('content')

    @if (count($comments) > 0)
        {{$comments->links()}}
        @foreach($comments as $comment)
            <div class="well">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                       {{$comment->created_at}}
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        {{$comment->name}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="{{route('comments.show',$comment->id)}}">
                            {{$comment->comment}}
                        </a>

                    </div>
                </div>
            </div>
            @endforeach
        {{$comments->links()}}
        @endif

@endsection