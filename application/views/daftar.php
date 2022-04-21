<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/kampus.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Kampus Merdeka</title>
</head>

<body>
    <!-- Bagian Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: #f3f4f5">
        <div class="container">
            <a class="navbar-brand" href="#profile">
                <img src="https://i3.wp.com/untirta.ac.id/wp-content/uploads/2020/12/logo-kampus-merdeka.png" alt="" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Daftar">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kampus">Lihat Kampus</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Halaman Depan -->
    <section class="jumbotron text-center" style="padding-top: 7rem;">
        <img src="https://staf.ulm.ac.id/sainulhermawan/wp-content/uploads/sites/146/2021/02/Kampus-Merdeka.png" alt="Kampus Merdeka" width="200">
        <h1 class="display-4" style="color:black">Daftarkan Segera Kampus Anda !!!</h1>
        <p class="lead" style="color:black">Jadilah penggerak masa depan</p>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000035" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,112C384,128,480,128,576,117.3C672,107,768,85,864,101.3C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>


    <!-- Daftar Kampus Merdeka -->
    <section id="daftar" style="background-color: #000035">

        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2 style="color: #FFFFFF">Daftarkan Kampus Anda</h2>
                </div>
            </div>
            <form action="" method="POST">

                <div class="mb-3">
                    <label for="nama" class="form-label" style="color: white;">Nama Kampus</label>
                    <input type="text" class="form-control" id="nama" name="nama">

                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label" style="color: white;">Alamat Kampus</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                </div>

                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill=" #f3f4f5" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,218.7C384,213,480,235,576,234.7C672,235,768,213,864,218.7C960,224,1056,256,1152,272C1248,288,1344,288,1392,288L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>