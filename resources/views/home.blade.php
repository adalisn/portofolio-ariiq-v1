@extends('layout/main')

@section('content')
@include('partials/navbar')
@include('intro')
@include('about')
@include('project3')
{{-- <section id="contact">
    <div class="container mb-4">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col d-md-flex align-items-center">
                <h1 class="text-uppercase text-center">Kontak Saya</h1>
            </div>
            <div class="col">
                @include('contact')
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
        fill="#6c757d"
        fill-opacity="1"
        d="M0,192L0,32L180,32L180,160L360,160L360,128L540,128L540,224L720,224L720,96L900,96L900,256L1080,256L1080,0L1260,0L1260,192L1440,192L1440,320L1260,320L1260,320L1080,320L1080,320L900,320L900,320L720,320L720,320L540,320L540,320L360,320L360,320L180,320L180,320L0,320L0,320Z"
        ></path>
    </svg>
</section>    --}}
@endsection