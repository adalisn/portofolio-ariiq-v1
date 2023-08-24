<form action="/contact" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="name" class="fw-bold">Nama</label>
        <input type="text" name="name" class="form-control border border-secondary @error('name') is-invalid @enderror" id="name" aria-describedby="name" required value="{{ old('name') }}"  />
        @error('name')
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="email" class="fw-bold">Email</label>
        <input type="email" name="email" placeholder="harap isi sesuai dengan @gmail" class="form-control border border-secondary @error('email') is-invalid @enderror" id="email" aria-describedby="email" />
        @error('email')
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="textarea" class="fw-bold">Pesan</label>
        <textarea class="form-control border border-secondary @error('textarea') is-invalid @enderror" name="message" id="textarea" rows="3"></textarea>
        @error('textarea')
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Kirim Kontak</button>
</form>