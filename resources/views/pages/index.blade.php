@extends('layouts.appmain')

@section('content')

    <div class="container">

    </div>

    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel blog application which I have created for blogging</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    
@endsection