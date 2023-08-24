@extends('layout/main')


@section('content')
<div class="container mt-3">
    <div class="row justify-content-space-between">
        <div class="col-auto">
            <h2>Projek</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($projects as $p)
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="fivicake.png" class="card-img-top" alt="fivicake">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <p class="card-text">{{ $p->description }}</p>
                        <p class="card-text">{{ $p->created }}</p>
                        <a href="http://fivicake.com" target="__blank" class="btn btn-primary">Visit Website</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection