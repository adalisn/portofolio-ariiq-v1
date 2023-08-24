
<section id="header">
  {{-- <div class="container mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"> --}}
  <div class="container mt-3">
    <div class="row g-0">
      <div class="card border-0">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body text-center h-100">
              <div class="h-100 d-flex justify-content-center text-uppercase" style="flex-direction: column">
                <h5 class="card-title fw-bold lh-1">Muhammad Ariiq Fiezayyan</h5>
                <h6 class="card-subtitle fst-italic">Lulusan Sarjana Komputer Binus University 2023</h6>
                <button class="btn btn-secondary btn-lg mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Kontak Saya</button>
                
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">KONTAK</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="container mb-4">
                      <div class="row">
                        <div class="col">
                          @include('contact')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex justify-content-center">
            <img src="ariiq.jpg" class="img-fluid rounded " alt="Foto Ariiq">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>