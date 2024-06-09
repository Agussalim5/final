@extends('layout.master')
@section('judul')
Halaman review
@endsection
@section('content')
<div class="container">
    <a href="{{ route('kritik.create') }}" class="btn btn-primary mb-3">Tambah</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead">
                <tr>
                    <th>Nama film</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Reviewer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kritiks as $kritik)
                <tr>
                    <td>{{ $kritik->film->judul }}</td>
                    <td>{{ Str::limit($kritik->content, 20) }}</td>
                    <td>{{ $kritik->point }}</td>
                    <td>{{ $kritik->user->name }}</td>
                    <td>
                        <a href="{{ route('kritik.show', $kritik->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('kritik.edit', $kritik->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('kritik.destroy', $kritik->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
