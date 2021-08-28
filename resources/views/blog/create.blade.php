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
                        <h4>Add Post
                            <a href="{{ url('posts') }} " class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('posts')}} " method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status"> 0=show, 1=hide
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
