@extends('layout.master')

@section('content')
<div class="container">
    <h1>Reviews</h1>
    <a href="{{ route('kritik.create') }}" class="btn btn-primary">Add Review</a>
    @foreach ($kritiks as $kritik)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $kritik->film->title }}</h5>
                <p class="card-text">{{ $kritik->content }}</p>
                <p class="card-text">Rating: {{ $kritik->point }}</p>
                <p class="card-text">By: {{ $kritik->user->name }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection