@extends('layouts.appmain')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success">Edit</a>
    <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" >Delete</button>
    </form>
@endsection