@extends('layouts.data')

@section('container')

<h3 class="text-center">Edit Data Course</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2 p-4">
              <form action="/course/{{ $course->id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                 <label for="judul_input" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judulInput" id="judul_input" value="{{ $course->judul }}">
                 </div>
                 <div class="mb-3">
                    <label for="deskripsi_input" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi_input" name="deskripsiInput" value="{{ $course->deskripsi }}">
                </div>
                <div class="mb-3">
                    <label for="durasi_input" class="form-label">Durasi</label>
                    <input type="text" class="form-control" id="durasi_input" name="durasiInput" value="{{ $course->durasi }}">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button> 
              </form>
            </div>
        </div>
    </div>
@endsection