@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }} </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Post
                            <a href="{{ url('posts') }} " class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('posts/'.$post->id) }} " method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" value="{{$post->title}} ">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" class="form-control" rows="3">{!! $post->description !!}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {!! $post->status == 1 ? 'checked':'' !!}> 0=show, 1=hide
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
