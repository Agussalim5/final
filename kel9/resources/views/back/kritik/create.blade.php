@extends('layout.master')

@section('content')
<div class="container">
    <h1>Add Review</h1>
    <form action="{{ route('kritik.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="film_id">Film</label>
            <select name="film_id" id="film_id" class="form-control">
                @foreach ($films as $film)
                    <option value="{{ $film->id }}">{{ $film->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="point">Rating</label>
            <input type="number" name="point" id="point" class="form-control" min="1" max="5">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection