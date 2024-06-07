@extends('layout.master')
@section('judul')
Detail cast
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $cast->nama }}</h5>
        <h5 class="card-title">{{ $cast->umur }}</h5>
        <p class="card-text">{{  $cast->bio }}.</p>
        <div class="icon-block">
          <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
        </div>
    </div>
</div>
@endsection