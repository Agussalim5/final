@extends('layout.master')
@section('judul')
Detail Film
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}" width="100" /></h5>
        <h5 class="card-title">{{ $film->judul }}</h5>
        <h5 class="card-title">{{ $film->tahun }}</h5>
        <p class="card-text">{{ $film->genre->nama }}</p>
        <p class="card-text">{{  $film->ringkasan }}</p>
        <div class="icon-block">
          <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
        </div>
    </div>
</div>
@endsection