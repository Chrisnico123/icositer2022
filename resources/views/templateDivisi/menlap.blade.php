<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>ICoSITeR 2022</title>

    <!-- Styling -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/imagehover.css/css/imagehover.min.css') }}" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container ">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets') }}/images/logo.png" width="77.2" height="58.5" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#speakers">Speakers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <a href="/register" type="button" class="btn btn-danger">Register</a>
            </div>
        </div>
    </nav>


    <div class="organigram">
        <h2 class="title-organigram"> Kepala Sub-divisi</h2>
        <h2 class="title-organigram-1">ICoSITeR</h2>

        <div class="row text-center">
            <div class="row g-2 g-md-4">

                <div class="col-12 col-md-6">
                    <h2 class="nama">Rahman Pajri</h2>
                    <img src="{{ asset('assets') }}/images/avatar-organigram.png">
                    <p class="jabatan">Kepala Sub Divisi Koor. Lapangan<br> TSE'20</br></p>
                    <div class="text-center">
                        <button type="button" class="btn btn-success">Staff</button>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <h2 class="nama">Rahman Pajri</h2>
                    <img src="{{ asset('assets') }}/images/avatar-organigram.png">
                    <p class="jabatan">Kepala Sub Divisi Medis<br> TSE'20</br></p>
                    <div class="text-center">
                        <button type="button" class="btn btn-success">Staff</button>
                    </div>
                </div>

            </div>
        </div>
    </div>



    </div>
    <!-- Footer -->
    <footer>
        <div class="atas">
            <div class="icos">
                <img src="{{ asset('assets') }}/images/logo.png" width="77.2" height="58.5" alt="">
            </div>
            <div class="alamat">
                <p>Jl.Terusan Ryacudu,Wayhuwi,Kec,Jati Agung,
                    <br>
                    Kabupaten Lampung Selatan,Lampung,35365
                </p>
            </div>
        </div>
        <div class="bawah">
            <div class="email">
                <div class="vektor1">
                    <img src="{{ asset('assets') }}/images/vektor1.png" width="" height="" alt="">
                </div>
                <div class="par1">
                    <p>icositer2022@gmail.com</p>
                </div>
            </div>
            <div class="telepon">
                <div class="vektor2">
                    <img src="{{ asset('assets') }}/images/Vector2.png" width="" height="" alt="">
                </div>
                <div class="par2">
                    <p>+6281282434826</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>