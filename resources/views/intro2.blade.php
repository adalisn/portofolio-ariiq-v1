<div class="bg-secondary p-5 border border-secondary">
  <div class="container mt-3">
    <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
      <div class="col d-flex align-items-center justify-content-center text-center mb-3" style="flex-direction: column">
        <h2 class="lh-1 text-uppercase display-5 fw-bold">Muhammad Ariiq Fiezayyan</h2>
        <p class="h5 fst-italic fw-bold">(Lulusan Sarjana Komputer Binus University 2023)</p>
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Kontak Saya</button>
        
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
      <div class="col">
        <img src="ariiq.jpg" class="img-thumbnail w-100" alt="">
      </div>
    </div>
  </div>
</div>
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,186.7C274.3,192,343,160,411,154.7C480,149,549,171,617,165.3C685.7,160,754,128,823,106.7C891.4,85,960,75,1029,85.3C1097.1,96,1166,128,1234,154.7C1302.9,181,1371,203,1406,213.3L1440,224L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> --}}