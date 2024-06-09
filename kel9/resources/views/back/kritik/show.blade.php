@extends('layout.master')

@section('content')
<div class="container">
    <h1>Review Details</h1>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $kritik->film->judul }}</h5>
            <p class="card-text">{{ $kritik->content }}</p>
            <p class="card-text">Rating: {{ $kritik->point }}</p>
            <p class="card-text">By: {{ $kritik->user->name }}</p>
        </div>
    </div>
    <a href="{{ route('kritik.index') }}" class="btn btn-primary mt-3">Back to Reviews</a>
</div>
@endsection
