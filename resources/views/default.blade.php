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
                <a href="#register" type="button" class="btn btn-danger">Register</a>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section>
        <img src="{{ asset('assets') }}/images/clouds.svg" id="clouds">
        <img src="{{ asset('assets') }}/images/bigcloud.svg" id="bigcloud">
        <img src="{{ asset('assets') }}/images/mountain.svg" id="mountain">
        <img src="{{ asset('assets') }}/images/airballoon.svg" id="airballoon">
        <img src="{{ asset('assets') }}/images/pole.svg" id="pole">
        <img src="{{ asset('assets') }}/images/prop.svg" id="prop">
        <img src="{{ asset('assets') }}/images/prop2.svg" id="prop2">
        <img src="{{ asset('assets') }}/images/ground.svg" id="ground">
    </section>
</body>

</html>
