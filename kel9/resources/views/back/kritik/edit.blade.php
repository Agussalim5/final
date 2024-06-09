@extends('layout.master')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    <form action="{{ route('kritik.update', $kritik->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="film_id">Film</label>
            <select name="film_id" id="film_id" class="form-control @error('film_id') is-invalid @enderror">
                @foreach ($films as $film)
                    <option value="{{ $film->id }}" {{ $kritik->film_id == $film->id ? 'selected' : '' }}>{{ $film->judul }}</option>
                @endforeach
            </select>
            @error('film_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content', $kritik->content) }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="point">Rating</label>
            <input type="number" name="point" id="point" class="form-control @error('point') is-invalid @enderror" min="1" max="5" value="{{ old('point', $kritik->point) }}">
            @error('point')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
