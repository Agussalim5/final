@extends('layout.master')

@section('judul')
Tambah Peran
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah Peran</h5>
        <form action="/peran" method="POST">
            @csrf
            <div class="mb-3">
                <label for="film_id" class="form-label">Film</label>
                <select class="form-control @error('film_id') is-invalid @enderror" id="film_id" name="film_id">
                    <option value="">Pilih Film</option>
                    @foreach($films as $film)
                        <option value="{{ $film->id }}">{{ $film->judul }}</option>
                    @endforeach
                </select>
                @error('film_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="cast_id" class="form-label">Cast</label>
                <select class="form-control @error('cast_id') is-invalid @enderror" id="cast_id" name="cast_id">
                    <option value="">Pilih Cast</option>
                    @foreach($casts as $cast)
                        <option value="{{ $cast->id }}">{{ $cast->nama }}</option>
                    @endforeach
                </select>
                @error('cast_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Peran</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('peran.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection