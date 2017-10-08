@extends('layouts.app')

@section('title', $user->username)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>{{ $user->username }}</h1></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"><strong>Username:</strong></div>
                            <div class="col-md-6">{{ $user->username }}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Full name:</strong></div>
                            <div class="col-md-6">{{ $user->full_name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
