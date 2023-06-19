@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @foreach($customers as $customer)
                            <li class="list-group-item">{{ $customer->first_name.' '.$customer->last_name }}</li>
                        @endforeach

                        @if(count($customers) == 0)
                        <li class="list-group-item">No customers Available </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
