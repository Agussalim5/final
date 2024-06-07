@extends('layout.master')

@section('judul')
Daftar Peran
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h5 class="card-title">Peran</h5>
        <a href="{{ route('peran.create') }}" class="btn btn-primary mb-3">Tambah Peran</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Peran</th>
                        <th scope="col">Nama Film</th>
                        <th scope="col">Nama Cast</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($peran as $key => $p)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->film->judul }}</td>
                        <td>{{ $p->cast->nama }}</td>
                        <td>
                            <a href="{{ route('peran.show', $p->id) }}" class="btn btn-primary btn-sm">Show</a>
                            <a href="{{ route('peran.edit', $p->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('peran.destroy', $p->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
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