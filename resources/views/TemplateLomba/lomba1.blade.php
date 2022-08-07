<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Lomba</title>
    <link rel="stylesheet" href="/Lomba/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        @yield('page1')
        @yield('page2')
        @yield('page3')
        @yield('page4')
        @yield('page5')
    </div>
    <section>
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
</body>

</html>
