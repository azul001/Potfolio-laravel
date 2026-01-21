<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'FreeFolio') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('import/assets/img/favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- ✅ Bootstrap 4.4.1 CSS (MISSING BEFORE) -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
    >

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <!-- Template Libraries -->
    <link href="{{ asset('import/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Template Styles -->
    <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

<!-- ================= NAVBAR ================= -->
<nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light shadow-sm py-3 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5">
            <span class="text-primary">Free</span>Folio
        </h1>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <a href="/#home" class="nav-item nav-link">Home</a>
            <a href="/#about" class="nav-item nav-link">About</a>
            <a href="/#qualification" class="nav-item nav-link">Quality</a>
            <a href="/#skill" class="nav-item nav-link">Skill</a>
            <a href="/#service" class="nav-item nav-link">Service</a>
            <a href="/#portfolio" class="nav-item nav-link">Portfolio</a>
            <a href="/#testimonial" class="nav-item nav-link">Review</a>
            <a href="/#contact" class="nav-item nav-link">Contact</a>
        </div>

        @auth
            <a href="/admin" class="btn btn-outline-primary d-none d-lg-block">Admin</a>
        @else
            <a href="/login" class="btn btn-outline-primary d-none d-lg-block">Login</a>
        @endauth
    </div>
</nav>

<!-- ================= PAGE CONTENT ================= -->
@yield('content')

<!-- ================= SCRIPTS ================= -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V8iE6xB6HkAmhpN6wXNjZspGDZCBo2"
    crossorigin="anonymous">
</script>

<script src="{{ asset('import/assets/lib/typed/typed.min.js') }}"></script>
<script src="{{ asset('import/assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('import/assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('import/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('import/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('import/assets/lib/lightbox/js/lightbox.min.js') }}"></script>

<script src="{{ asset('import/assets/js/main.js') }}"></script>

</body>
</html>
