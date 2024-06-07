@extends('layout.master')
@section('judul')
Tabel Cast
@endsection
@section('content')
<div class="card">
    <div class="card-body">
      @if(session('success'))
      <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <h5 class="card-title">cast</h5>
      <a href="/cast/create" class="btn btn-primary  mb-3">TambahData</a>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">no</th>
              <th scope="col">nama</th>
              <th scope="col">umur</th>
              <th scope="col">bio</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($cast as $key => $item)
            <tr>
              <td>{{ $key+1}}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->umur }}</td>
              <td>{{ Str::limit($item->bio, 30) }}</td>
              <td>
                <a href="/cast/{{ $item->id }}" class="btn btn-primary btn-sm">
                show</a>
                <a href="/cast/{{ $item->id }}/edit" class="btn btn-info btn-sm">
                edit</a>
                <form action="{{ route('cast.destroy', $item->id) }}" method="POST" class="d-inline">
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