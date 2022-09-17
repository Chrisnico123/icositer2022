<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>ICoSITeR 2022</title>

    <!-- Styling -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

</head>

<body>
    <script src="{{ asset('assets') }}/js/aos.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script>
        AOS.init();
    </script>
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


    <div class="organigramsub">
        <img src="{{ asset('assets') }}/images/background/item7eks.svg" id="item7eks">
        <h2 data-aos="fade-down" data-aos-duration="1000" class="title-organigram"> Kepala Sub-divisi</h2>
        <h2 data-aos="zoom-in" data-aos-duration="1000" class="title-organigram-1">ICoSITeR</h2>

        <div class="row text-center">
            <div class="row g-2 g-md-4">

                <div class="col-12 col-md-6">
                    <h2 data-aos="fade-left" data-aos-duration="3000" class="nama">Rahman Pajri</h2>
                    <img data-aos="fade-right" data-aos-duration="3000" src="{{ asset('assets') }}/images/avatar-organigram.png">
                    <p data-aos="fade-up" data-aos-duration="3000" class="jabatan">Wakil Kepala Divisi Akomodasi<br> TSE'20</br></p>

                    <!-- Button trigger modal -->
                    <div class="text-center">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Staff</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Staff Sub Divisi...</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    staff masuk sini
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    </div>
    <!-- footer -->
    <footer>
        <div class="atas">
            <div class="icos">
                <img src="{{ asset('assets') }}/images/logo.png" width="77.2" height="58.5" alt="">
            </div>
            <div class="alamat">
                <p>Jl.Terusan Ryacudu, Wayhuwi, Kec. Jati Agung,
                    <br>
                    Kabupaten Lampung Selatan, Lampung, 35365
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
