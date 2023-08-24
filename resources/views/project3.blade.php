<section id="projects">
    <div class="container">
        <div class="row row-satu g-0 justify-content-between justify-content-md-center" data-aos="fade-down" data-aos-duration="1000">
            <div class="col-auto mx-2 text-center">
                <h1 class="text-uppercase display-3 fw-bold">Projek</h1>
            </div>
            <div class="col-auto mx-2">
                <a class="btn btn-secondary mt-lg-4 mt-md-3 mt-sm-2 mt-0 d-flex justify-content-center" disabled>Lihat Semua</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2">
            @foreach ($projects as $p)
            {{-- @if ($p->status == 'done') --}}
            <div class="col mb-3">
                <div class="card mb-3 rounded h-100 border border-secondary" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                    <div class="row g-0 h-100">
                        <div class="col-md-6">
                            <img src="{{ $p->image }}" class="img-fluid rounded h-100" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fw-bold">{{ $p->name }}</h5>
                                <p class="card-text h-100 border border-dark p-2"><strong>Tanggal Update</strong> : {{ \Carbon\Carbon::parse($p->date)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y')}}</p>
                                <a href="http://fivicake.com" target="_blank" class="btn btn-success">Lihat Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
            {{-- @endif --}}
            @endforeach
        </div>
        <p class="text-center text-danger" data-aos="fade-up" data-aos-delay="800">
            <strong>Catatan</strong> : Button "Lihat semua" akan diaktifkan ketika sudah melebihi 4 Projek
        </p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,186.7C274.3,192,343,160,411,154.7C480,149,549,171,617,165.3C685.7,160,754,128,823,106.7C891.4,85,960,75,1029,85.3C1097.1,96,1166,128,1234,154.7C1302.9,181,1371,203,1406,213.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>

