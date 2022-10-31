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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Speakers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">About</a>
                    </li>
                </ul>
                <a href="/register" type="button" class="btn btn-danger">Register</a>
            </div>
        </div>
    </nav>

    <div class="organigramdiv">
        <img src="{{ asset('assets') }}/images/background/item7div.svg" id="item7div">
        <h2 data-aos="fade-down" data-aos-duration="1000" class="title-organigram"> Ketua Divisi </h2>
        <h2 data-aos="zoom-in" data-aos-duration="1000" class="title-organigram-1">ICoSITeR</h2>

        <div class="row text-center">
            <div class="row g-2 g-md-4">

                <div class="col-12 col-md-6 ">
                    <img data-aos="fade-right" data-aos-duration="3000"
                    src="{{ asset('assets') }}/icos/<?= $data[0]['nim'] ?>.png">
                    <h2 data-aos="fade-left" data-aos-duration="3000"><?= $data[0]['nama'] ?></h2>
                    <p data-aos="fade-up" data-aos-duration="3000" class="jabatan"><?= $data[0]['jabatan'] ?> <?= $data[0]['nim'] ?><br>
                        <?=$data[0]['prodi'] ?></br></p>
                </div>
                @foreach ($data[0]['anggota'] as $item)
                <div class="col-12 col-md-6 ">
                    <img data-aos="fade-right" data-aos-duration="3000"
                    src="{{ asset('assets') }}/icos/<?= $item['nim'] ?>.png">
                    <h2 data-aos="fade-left" data-aos-duration="3000"><?= $item['nama'] ?></h2>
                    <p data-aos="fade-up" data-aos-duration="3000" class="jabatan"><?= $item['jabatan'] ?> <?= $item['nim'] ?> <br>
                        <?= $item['prodi'] ?></br></p>
                </div>
                @endforeach

                @foreach ($data as $item)
                    @if ($item['nim'] !== "120190008")
                        <div class="col-12 col-md-6">
                            <img data-aos="fade-right" class="organigram-size" data-aos-duration="3000" src="{{ asset('assets') }}/icos/<?= $item['nim'] ?>.png">
                            <h2 data-aos="fade-left" data-aos-duration="3000" ><?= $item['nama'] ?></h2>
                            <p data-aos="fade-up" data-aos-duration="3000" class="jabatan"><?= $item['jabatan'] ?> <?= $item['nim'] ?> <br> <?= $item['prodi'] ?></br></p>
                            <div class="text-center">
                                <a href=<?= $item['router'] ?>>
                                    <button type="button" class="btn btn-success">Sub Divisi</button>
                                </a>
                            </div>
                        </div>                    
                    @endif
                @endforeach


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
                <p>Jl.Terusan Ryacudu, Wayhuwi, Kec,Jati Agung,
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
