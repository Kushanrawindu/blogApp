@extends('layouts.appmain')

@section('content')
    <h1>Create Posts</h1>

    <div class="container">
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-default">

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                        </div>
                                  
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body" placeholder="Body" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                            <button type="reset" class="btn btn-outline-danger">Cancel</button>
                            </form>
                        </div>
                        
                    </section>
                </div>
        </div>
        </form>
    </div>
@endsection