@extends('layouts.data')

@section('container')
<h3 class="text-center">Tambah Data Materi</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2 p-4">
                <form action="{{ route('detailMateri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                           <input type="hidden" class="form-control" name="idInput" id="id_input" value="{{ $id_course }}">
                        </div>
                    <div class="mb-3">
                        <label for="judul_input" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judulInput" id="judul_input">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_input" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi_input" name="deskripsiInput">
                    </div>
                    <div class="mb-3">
                        <label for="link_input" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link_input" name="linkInput">
                    </div>
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection