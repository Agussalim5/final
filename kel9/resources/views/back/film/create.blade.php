@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">create Film</h5>
        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>  
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea class="form-control" id="ringkasan" name="ringkasan"></textarea>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun">
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" id="poster" name="poster">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="is_active" class="form-control">
                    <option value="1">Publish</option>
                    <option value="0">Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select class="form-control" id="genre_id" name="genre_id">
                    @foreach ($genre as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">tambah</button>
        </form>
    </div>

@endsection