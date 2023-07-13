@extends('layouts.main')

@section('container')

<h3 class="text-center">COURSES</h3>
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<a href="/coursecreate" class="btn btn-success">Tambah Data</a><br><br>
<table class="table table-bordered">
    <thead class="table-dark ">
        <tr>
            <th class="text-center" style="width: 10px">No</th>
            <th class="text-center" style="width: 100px">Judul</th>
            <th class="text-center" style="width: 180px">Deskripsi</th>
            <th class="text-center" style="width: 70px">Durasi</th>
            <th class="text-center" style="width: 60px">Detail Materi</th>
            <th class="text-center" style="width: 60px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($course as $item)
        <tr>
            <td class="text-center" scope="row">{{ $no }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td class="text-center">{{ $item->durasi }}</td>
            <td class="pl-4"><a href="/detailMateri/{{ $item->id }}" class="btn btn-primary" >Lihat Daftar Materi</a></td>
            <td class="pl-4">
                <a href="/course/{{ $item->id }}/edit" class="btn btn-primary" >Edit</a>
                <form action="/course/{{ $item->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                <button class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @php
            $no++;
        @endphp
        @endforeach
    </tbody>
</table>
@endsection