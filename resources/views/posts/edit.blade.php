@extends('layouts.appmain')

@section('content')
    <h1>Edit Posts</h1>

    <div class="container">
        <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-default">

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$post->title}}">
                        </div>
                                  
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body" placeholder="Body" rows="10" value="{{$post->body}}"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                        </div>
                        
                    </section>
                </div>
        </div>
        </form>
    </div>
@endsection