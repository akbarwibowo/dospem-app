<!doctype html>
<html lang="en">
  <head>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <style>
            .container-fluid{
                box-shadow: 3px 3px 5px #c4c7d3;
            }
            .navbar{
                --bs-navbar-padding-x: 0;
                --bs-navbar-padding-y: 0;
            }
            .dropdown-content{
                width: 169px;

            }
        </style>
  </head>
  <body>
    <div class="container-fluid" style="">
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
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/results">Results</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/userlist">User</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/newquestion">Add Question</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/question">Question</a>
                </li>
            </ul>
            <div class="dropdown">
                <a id="navbarDropdown" class="dropbtn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                {{-- <a href="javascript:void(0)" class="dropbtn">Profil</a> --}}
                <div class="dropdown-content">
                    <a href="#">Edit Profil</a>
                    {{-- <a method="POST" href="{{ route('logout') }}">Logout</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <!-- <button class="button-primary">Profil</button> -->

            </div>
        </div>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
  </body>
</html>
