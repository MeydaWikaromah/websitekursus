    @extends('layouts.main')

    @section('container')
    
    <h2 class="text-center">COURSES</h2>
    <div class= "d-flex flex-wrap mb-3 mt-4">

        @foreach ($course as $item)
        <div class="card border-dark m-3 p-2" style="width: 14rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $item->judul }}</h5>
                <p class="card-text">{{ $item->durasi }}</p>
                <a href="/detailCourse/ {{$item->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>

    @endsection