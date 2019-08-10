@extends('layouts.appmain')

@section('content')
    <div>
        <h1>Posts</h1>
    </div>
    
    
    <div class="container">
        @if(count($posts) >= 1)
        @foreach ($posts as $post)
        
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        
        @endforeach
            <div>
                {{$posts->links()}}
            </div>    
        
        @else
            <p>No posts found yet</p>
        @endif
    </div>
   
@endsection
