<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css') }}"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <!--Font Google -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap') }}"
        rel="stylesheet">

    <!--Style-->
    <link rel="stylesheet" href="css/style.css">

    <title>Dospem</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dospem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/subjects">Subjects</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                {{-- <div class="dropdown"> --}}
                    {{-- <a href="javascript:void(0)" class="dropbtn">Profil</a>
                    <div class="dropdown-content">
                        @php
                            $user_id = Auth::user()->id;
                        @endphp
                        <a href="/profile/{{ $user_id }}">Edit Profil</a>

                        
                    </div> --}}
                    <!-- <button class="button-primary">Profil</button> -->

                {{-- </div> --}}
            </div>
        </div>
    </nav>
    <li class="dropdown">

    </li>
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h3> Hello, welcome! </h3>
                    <h1>Find subjects according to your passions.</h1>
                    <a href="/form">
                        <button class="button-lg-primary">Find subjects</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
