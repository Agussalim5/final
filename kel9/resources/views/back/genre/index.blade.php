@extends('layout.master')
@section('judul')
Tabel genre
@endsection
@section('content')
<div class="card">
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
  <div class="card-body">
    <h5 class="card-title">genre</h5>
    <a href="/genre/create" class="btn btn-primary mb-3">TambahData</a>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($genre as $key => $item)
        <tr>
          <td>{{ $key+1}}</td>
          <td>{{ $item->nama }}</td>
          <td>
            <a href="/genre/{{ $item->id }}/edit" class="btn btn-info btn-sm">
            edit</a>
            <form action="{{ route('genre.destroy', $item->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
               delete</button>
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
