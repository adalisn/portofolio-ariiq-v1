{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Komunikasi Terbuka</h2> 
    <br>
    <strong>Pengguna: </strong><br>
    <strong>Name: </strong>{{ $data->name }} <br>
    <strong>Email: </strong>{{ $data->email }} <br>
    <strong>Pesan: </strong>{{ $data->message }} <br><br>
      
    Thank you
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhammad Ariiq Fiezayyyan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="..." type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Uchen&display=swap" rel="stylesheet">
  </head>
  <body style="font-family: 'Quicksand', sans-serif;">
    {{-- @yield('content') --}}
    <h2>Komunikasi Terbuka</h2>
    <p><strong>Nama Pengirim</strong> : {{ $data->name }}</p>
    <p><strong>Email</strong> : {{ $data->email }}</p>
    <p><strong>Pesan</strong> : {{ $data->message }}</p>
    {{-- <footer class="bg-primary text-white text-center pb-5">
      <p>Ariiq Fiezayyan</p>
      <p>Linkedln, Github</p>  
    </footer> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- <script src="main.js"></script> --}}
  </body>
</html>