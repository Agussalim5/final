@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
    <div class="card-title">Genre Form</div>
    <hr>
     <form action="/genre/{{ $genre->id }}" method="POST">
     @csrf
     @method('PUT')
    <div class="form-group">
     <label for="input-1">Name</label>
     <input type="text" name="nama" class="form-control" id="input-1" value="{{ $genre->nama }}">
    </div>
    @error('nama')
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="zmdi zmdi-block-alt"></i> pemberitahuan!</h5>
        {{ $message }}
      </div>
    @enderror
    <div class="form-group">
     <button type="submit" class="btn btn-light px-5"> submit</button>
   </div>
   </form>
</div>
</div>
@endsection
