@extends('layouts.data')

@section('container')

<h2 class="text-center">DETAIL COURSES</h2>
<div class= "d-flex flex-wrap mb-3 mt-4">

    @foreach ($course as $item)
    <div class="card">
        <div class="card-header">Durasi : {{ $item->durasi }}</div>
        <div class="card-body">
          <h5 class="card-title">{{ $item->judul }}</h5>
          <p class="card-text">{{ $item->deskripsi }}</p>
          <a href="/home" class="btn btn-dark" >Back</a>
        </div>
      </div>
    @endforeach
</div>
@endsection