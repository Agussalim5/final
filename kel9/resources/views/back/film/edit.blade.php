@extends('layout.master')
@section('judul')
Edit Film
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Film</h5>
        <form action="/film/{{ $film->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $film->judul }}" required>
            </div>  
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea class="form-control" id="ringkasan" name="ringkasan">{{ $film->ringkasan }}</textarea>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $film->tahun }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status </label>
                <select name="is_active" class="form-control">
                    <option value="1" {{ $film->is_active ==  '1' ? 'selected' : '' }}>Publish</option>
                    <option value="0" {{ $film->is_active ==  '0' ? 'selected' : '' }}>Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select class="form-control" id="genre_id" name="genre_id" required>
                    @foreach($genre as $g)
                        <option value="{{ $g->id }}" {{ $film->genre_id == $g->id ? 'selected' : '' }}>{{ $g->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" id="poster" name="poster">
                @if($film->poster)
                    <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
