@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @foreach($posts as $post)
                            <li class="list-group-item">{{ $post->title }}</li>
                        @endforeach

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
