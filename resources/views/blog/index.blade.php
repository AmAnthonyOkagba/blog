@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }} </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Post
                            <a href="{{ url('posts/create') }} " class="btn btn-primary float-end">Add Post</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>User</td>
                                    <td>Title</td>
                                    <td>Status</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $item)
                                    <tr>
                                        <td>{{$item->id}} </td>
                                        <td>{{$item->users->name}} </td>
                                        <td>{{$item->title}} </td>
                                        <td>
                                            @if ($item->status == 1)
                                                Hidden
                                            @else
                                                Visible
                                            @endif
                                        </td>
                                        <td >
                                            <a href="{{ url('posts/'.$item->id.'/edit') }} " class="btn btn-primary">Edit</a>
                                        </td>
                                        <td >
                                            {{-- <a href="{{ url('delete-employee/'.$item->id) }}" class="btn btn-danger">Delete</a> --}}
                                            <form action="{{ url('posts/'.$item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
