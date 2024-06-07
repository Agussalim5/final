@extends('layout.master')
@section('judul')
Tabel film
@endsection
@section('content')

<div class="card">
  <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <h5 class="card-title">film</h5>
    <a href="/film/create" class="btn btn-primary  mb-3">TambahData</a>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">judul</th>
            <th scope="col">ringkasan</th>
            <th scope="col">tahun</th>
            <th scope="col">poster</th>
            <th scope="col">genre</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($film as $key => $film)
          <tr>
            <td>{{ $key+1}}</td>
            <td>{{ $film->judul }}</td>
            <td>{{ Str::limit($film->ringkasan, 30) }}</td>
            <td>{{ $film->tahun }}</td>
            <td>
                @if ($film->poster)
                    <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}" width="100">
                @endif
            </td>
            <td>{{ $film->genre->nama }}</td>
            <td>
              <a href="/film/{{ $film->id }}"class="btn btn-primary btn-sm">
                show</a>
              <a href="/film/{{ $film->id }}/edit"class="btn btn-info btn-sm">
                edit</a>
              <form action="{{ route('film.destroy', $film) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center">Data kosong</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection