@extends('layout.master')
@section('judul')
Tambah review
@endsection
@section('content')
<div class="container">
    <form action="{{ route('kritik.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="film_id">Film</label>
            <select name="film_id" id="film_id" class="form-control @error('film_id') is-invalid @enderror">
                <option value="">Select a film</option>
                @foreach ($films as $film)
                    <option value="{{ $film->id }}" {{ old('film_id') == $film->id ? 'selected' : '' }}>{{ $film->judul }}</option>
                @endforeach
            </select>
            @error('film_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="point">Rating</label>
            <input type="number" name="point" id="point" class="form-control @error('point') is-invalid @enderror" min="1" max="5" value="{{ old('point') }}">
            @error('point')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
