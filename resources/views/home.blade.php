@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   Hello {{Auth::user()->name}}
                    <p>
                        {{ clean('This thext has to be cleaned > by this # ') }}

                    </p>
                    <p>
                        {{ sum(5,10) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
