<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Page {{ $judul }}</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light" style="background-color:rgb(82, 130, 202)">
        <div class="container">
          <a class="navbar-brand" href="#"><b>Perpustakaan</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <b><a class="nav-link" aria-current="page" href="/">Home</a></b>
              </li>
              <li class="nav-item">
                <b><a class="nav-link" aria-current="page" href="/buku">Data Buku</a></b>
              </li>
              <li class="nav-item">
                <b><a class="nav-link" aria-current="page" href="/petugas">Data Petugas</a></b>
              </li>
              <li class="nav-item">
                <b><a class="nav-link" href="/mahasiswa">Data Mahasiswa</a></b>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container mt-4">
        @yield('container')
    </div>


  </body>
</html>