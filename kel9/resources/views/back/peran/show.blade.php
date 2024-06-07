@extends('layout.master')

@section('judul')
Detail Peran
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Peran</h5>
        <p><strong>Nama Peran:</strong> {{ $peran->nama }}</p>
        <p><strong>Nama Film:</strong> {{ $peran->film->judul }}</p>
        <p><strong>Nama Cast:</strong> {{ $peran->cast->nama }}</p>
        <div class="icon-block">
            <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
        </div>
    </div>
</div>
@endsection