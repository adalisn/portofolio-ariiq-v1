{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> --}}
<nav class="navbar navbar-expand-lg navbar-light sticky-top p-3" >
  <div class="container">
    <span class="navbar-brand mb-0 fs-2 mt-2" href="#" style="font-family: 'Uchen', serif;">MAF</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fs-5 mb-0" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projects">Projek</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>

<script>
    const navEl = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
            navEl.classList.add('navbar-scrolled');
        } else if (window.scrollY < 56) {
            navEl.classList.remove('navbar-scrolled');
        }
    })
</script>