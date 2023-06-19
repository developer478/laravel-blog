@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Blog Post <a class="btn btn-success pull-right" href="{{ route('post.create')}}">Create</a></h3>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success " role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th scope="row">{{$post->id}}</th>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->status}}</td>
                                        <td>
                                            <a href="{{route('post.edit',['id' => $post->id])}}"><i class="fa fa-trash"></i>Edit</a>
                                            <a href="{{route('post.delete',['id' => $post->id])}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @if(count($posts) == 0)
                        <li class="list-group-item">No Post Available </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
