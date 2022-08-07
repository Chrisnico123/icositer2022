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
    </link>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    </link>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets') }}/images/logo.png" width="77.2" height="58.5" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#speakers">Speakers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <a href="/lomba1s/page1" type="button" class="btn btn-danger">Register</a>
            </div>
        </div>
    </nav>

    <!-- Page1 -->
    <section>
        <h2 id="text">ICoSITeR<br>2022</h2>
        <img src="{{ asset('assets') }}/images/clouds.svg" id="clouds">
        <img src="{{ asset('assets') }}/images/bigcloud.svg" id="bigcloud">
        <img src="{{ asset('assets') }}/images/mountain.svg" id="mountain">
        <img src="{{ asset('assets') }}/images/airballoon.svg" id="airballoon">
        <img src="{{ asset('assets') }}/images/pole.svg" id="pole">
        <img src="{{ asset('assets') }}/images/prop.svg" id="prop">
        <img src="{{ asset('assets') }}/images/prop2.svg" id="prop2">
        <img src="{{ asset('assets') }}/images/ground.svg" id="ground">
    </section>

    <script>
        let text = document.getElementById('text');
        let clouds = document.getElementById('clouds');
        let bigcloud = document.getElementById('bigcloud');
        let mountain = document.getElementById('mountain');
        let airballoon = document.getElementById('airballoon');
        let pole = document.getElementById('pole');
        let prop = document.getElementById('prop');
        let prop2 = document.getElementById('prop2');
        let ground = document.getElementById('ground');

        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            text.style.top = 149 + value * 0.5 + 'px';
        });
    </script>
    <!-- Page2 -->

    <div class="page2">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2>News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada porttitor vestibulum. Sed
                        suscipit
                        sollicitudin dui non porta. Curabitur hendrerit turpis leo, a sagittis tellus consectetur in.
                        Nam vehicula
                        eleifend sapien dictum ornare. Integer vehicula id ligula ac venenatis. Mauris non gravida erat.
                        Phasellus
                        sed augue tortor. Mauris vestibulum arcu libero. Nunc placerat, nisl vitae pellentesque gravida,
                        est neque
                        hendrerit quam, sit amet molestie lacus risus eu diam. Maecenas sollicitudin tincidunt
                        consectetur. Vivamus
                        fermentum mi in turpis commodo, in fermentum sapien faucibus. Nam auctor non massa vitae
                        condimentum. In
                        tortor quam, volutpat ac lacus sed, imperdiet ultrices risus. Cras sed mollis est.

                    <div class="button">
                        <a href="#view" type="button" class="btn btn-success">View</a>
                    </div>
                </div>

                <div class="col">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                </div>

            </div>

        </div>

        </p>
    </div>

    <!-- Page4 -->
    <div class="page4">
        <h2>GALLERY</H2>
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

        </div>
    </div>

</body>

</html>
