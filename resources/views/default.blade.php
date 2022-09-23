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

    <!-- Page1 -->
    <section>
        <h2 id="text">ICoSITeR<br>2022</h2>
        <img src="{{ asset('assets') }}/images/clouds.svg" id="clouds">
        <img src="{{ asset('assets') }}/images/clouds.svg" id="clouds2">
        <img src="{{ asset('assets') }}/images/bigcloud.svg" id="bigcloud">
        <img src="{{ asset('assets') }}/images/mountain.svg" id="mountain">
        <img src="{{ asset('assets') }}/images/airballoon.svg" id="airballoon">
        <img src="{{ asset('assets') }}/images/pole.svg" id="pole">
        <img src="{{ asset('assets') }}/images/prop.svg" id="prop">
        <img src="{{ asset('assets') }}/images/prop2.svg" id="prop2">
        <img src="{{ asset('assets') }}/images/ground.svg" id="ground">
    </section>

    <script src="{{ asset('assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        let text = document.getElementById('text');
        let clouds = document.getElementById('clouds');
        let clouds2 = document.getElementById('clouds2');
        let bigcloud = document.getElementById('bigcloud');
        let mountain = document.getElementById('mountain');
        let airballoon = document.getElementById('airballoon');
        let pole = document.getElementById('pole');
        let prop = document.getElementById('prop');
        let prop2 = document.getElementById('prop2');
        let ground = document.getElementById('ground');

        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            clouds.style.bottom = value * 0.3 + 'px';
            clouds2.style.bottom = value * 0.1 + 'px';
            prop.style.transform = 'translateY(' + value / 70 + '%)';
            prop2.style.transform = 'translateY(' + value / 70 + '%)';
            pole.style.transform = 'translateY(' + value / 70 + '%)';
            bigcloud.style.transform = 'translateY(' + value / 60 + '%)';
            mountain.style.transform = 'translateY(' + value / 40 + '%)';
            text.style.top = 149 + value * 0.5 + 'px';
            airballoon.style.bottom = value * 0.5 + 'px';
        });
    </script>

    <!-- Page2 -->
    <div class="page2" id="about">
        <img src="{{ asset('assets') }}/images/background/item1.svg" id="item1">
        <img src="{{ asset('assets') }}/images/background/item2.svg" id="item2">
        <h2 data-aos="zoom-in" data-aos-duration="1000" class="title">About</h2>
        <div class="row1">
            <div class="col1">
                <center>
                    <p data-aos="fade-right" data-aos-duration="3000">
                        <span> ICoSITeR</span> (International Conference On Scientific, Infrastructure Technology and
                        Regional Development) merupakan seminar skala internasional tahunan dan menjadi rangkaian acara
                        Dies Natalis Institut Teknologi Sumatera. Seminar Internasional yang menjadi wadah bagi para
                        peneliti, pengamat, masyarakat serta pihak terkait lainnya dengan tema – tema berbeda setiap
                        tahunnya. Yang tentunya akan menghadirkan pembicara yang sangat kompeten dalam bidangnya baik
                        dalam negeri maupun luar negeri. Selain seminar skala internasional, akan ada perlombaan dan
                        cultural night berskala internasional. Pada tahun 2022 ini adalah kali ketujuh seminar ini akan
                        diselenggarakan, dimana ICoSITeR pertama telah dilaksanakan mulai pada tahun 2016 lalu. Tujuan
                        utama diselenggarakan ICoSITeR adalah untuk mengenalkan ITERA kepada dunia Internasional dalam
                        rangka untuk menjalin kerja sama dalam bidang penelitian maupun pendidikan dan menjadi wadah
                        dalam mengkolaborasikan seluruh program studi di ITERA.
                    </p>
                </center>
                {{-- <div class="button">
                        <a href="#view" type="button" class="btn btn-success">View</a>
                    </div> --}}
            </div>
            <div class="col2">
                <center>
                    <img data-aos="zoom-out-up" data-aos-duration="3000"
                        src="{{ asset('assets') }}/images/background/item3.png" id="item3">
                </center>
            </div>
        </div>

    </div>
    {{-- Page3 --}}
    <div class="page3" id="speakers">
        <img src="{{ asset('assets') }}/images/background/item4.svg" id="item4">
        <h2 data-aos="zoom-in" data-aos-duration="1000" class="title">SPEAKER</h2>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000" class="speaker">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/images/108-1081678_clipart-info-tanda-tanya-vector-removebg-preview.png') }}"
                                class="sizeimg bg-light">
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/images/108-1081678_clipart-info-tanda-tanya-vector-removebg-preview.png') }}"
                                class="sizeimg bg-light">
                        </figure>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    loop: true,
                    slidesPerView: "auto",
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                });
            </script>
        </div>
        <section class="s3">
            <img src="{{ asset('assets') }}/images/group1.png" class="isi1">
            <img src="{{ asset('assets') }}/images/group2.png" class="isi2">
        </section>
        {{-- </p> --}}
    </div>

    <!-- Page4 -->
    <div class="page4" id="gallery">
        <img src="{{ asset('assets') }}/images/background/item5.svg" id="item5">
        <h2 data-aos="flip-right" data-aos-duration="1000" class="title">GALLERY</H2>
        <div class="gallery_container">
            <!-- <img src="{{ asset('assets') }}/images/galeri2.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Gallery" /> -->
            <div class="gallery_content">
                <div class="gallery_image">
                    <div data-aos="flip-left" data-aos-duration="3000">
                        <img src="{{ asset('assets') }}/images/galeri1.jpg" alt="gallery">
                    </div>
                    <div data-aos="flip-right" data-aos-duration="3000">
                        <img src="{{ asset('assets') }}/images/galeri2.jpeg" alt="gallery">
                    </div>
                    <div data-aos="flip-left" data-aos-duration="3000">
                        <img src="{{ asset('assets') }}/images/galeri3.jpg" alt="gallery">
                    </div>
                    <div data-aos="flip-right" data-aos-duration="3000">
                        <img src="{{ asset('assets') }}/images/galeri4.jpg" alt="gallery">
                    </div>
                    <div data-aos="flip-left" data-aos-duration="3000">
                        <img src="{{ asset('assets') }}/images/galeri5.jpg" alt="gallery">
                    </div>
                    <div data-aos="flip-right" data-aos-duration="3000">
                        <img src="{{ asset('assets') }}/images/galeri6.jpg" alt="gallery">
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Page 5 --}}
    <div class="page5" id="recent-post">
        <img src="{{ asset('assets') }}/images/background/item6.svg" id="item6">
        <h2 data-aos="zoom-in" data-aos-duration="1000" class="title">Recent Post</h2>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000"
            class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/1"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/2"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/3"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/4"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/5"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/6"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/7"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/8"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/9"></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/random/10"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <!-- Swiper JS -->
    <script src="{{ asset('assets') }}/js/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 30,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <!-- organigram -->
    <div class="organigram">
        <img src="{{ asset('assets') }}/images/background/item7.svg" id="item7">
        <h2 data-aos="fade-down" data-aos-duration="1000" class="title-organigram"> Our Headline In </h2>
        <h2 data-aos="zoom-in" data-aos-duration="1000" class="title-organigram-1">ICoSITeR</h2>

        <div class="row text-center">
            <div class="row g-2 g-md-4"> 
                <div class="col-12 col-md-6 ">
                    <h2 data-aos="fade-left" data-aos-duration="3000" class="nama"><?= $data[0]['nama'] ?></h2>
                    <img data-aos="fade-right" data-aos-duration="3000"
                        src="{{ asset('assets') }}/images/avatar-organigram.png">
                    <p data-aos="fade-up" data-aos-duration="3000" class="jabatan"><?= $data[0]['jabatan'] ?> <?= $data[0]['nim'] ?><br>
                        <?=$data[0]['prodi'] ?></br></p>
                </div>
                @foreach ($data[0]['anggota'] as $item)
                <div class="col-12 col-md-6 ">
                    <h2 data-aos="fade-left" data-aos-duration="3000" class="nama"><?= $item['nama'] ?></h2>
                    <img data-aos="fade-right" data-aos-duration="3000"
                        src="{{ asset('assets') }}/images/avatar-organigram.png">
                    <p data-aos="fade-up" data-aos-duration="3000" class="jabatan"><?= $item['jabatan'] ?> <?= $item['nim'] ?> <br>
                        <?= $item['prodi'] ?></br></p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center">
            <a href="/divisi" type="button" class="btn btn-success">Lihat Divisi</a>
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
                    <img src="{{ asset('assets') }}/images/vektor1.png" width="" height=""
                        alt="">
                </div>
                <div class="par1">
                    <p>icositer2022@gmail.com</p>
                </div>
            </div>
            <div class="telepon">
                <div class="vektor2">
                    <img src="{{ asset('assets') }}/images/Vector2.png" width="" height=""
                        alt="">
                </div>
                <div class="par2">
                    <p>+6281282434826</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
