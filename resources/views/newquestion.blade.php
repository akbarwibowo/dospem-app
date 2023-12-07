
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
                        <a class="nav-link" href="/admin_subjects">Subjects</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/userlist">User</a>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="row" class="form">
                            <form action="/newquestion" method="GET">
                                Add <input name="qty" type="number">
                                <button class="btn" type="submit">Question</button> 
                            </form>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="/questionlist" class="nav-link">Question List</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/home">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="formsContainer" class="row">
            <div class="card">
                
            </div>
            <form  action="{{ route('add') }}" method="POST">
                @php
                $num = $qty
                @endphp
                @for ($i = 0; $i < $num; $i++)
                @csrf
                {{-- <div class="radioForm"> --}}
                    <div class="card">
                        <div class="card-body">
                            <label class="form-label" for="questionText">{{ _('Pertanyaan') }}</label><br>
                            <input class='form-control  ' type="text" id="questionText" name="question[{{ $i }}]" required>
                            <br>
                            <h5>Semester</h5>
                            <div class="form-check">
                                <input  type="radio" id="semester4" name="semester[{{ $i }}]" value="4" required>
                                <label for="semester4" class="form-check-label">4</label>
                            </div>
                            <div class="form-check">
                                <input  type="radio" id="semester5" name="semester[{{ $i }}]" value="5" required>
                                <label for="semester5" class="form-check-label">5</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="semester6" name="semester[{{ $i }}]" value="6" required>
                                <label for="semester6" class="form-check-label">6</label>
                            </div>
                            <h5>Jenis</h5>
                            <div class="form-check">
                                <input type="radio" id="software" name="type[{{ $i }}]" value="1" required>
                                <label for="software" class="form-check-label">Rekayasa Perangkat Lunak</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="networking" name="type[{{ $i }}]" value="2" required>
                                <label for="networking" class="form-check-label">Jaringan Komputer</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="multimedia" name="type[{{ $i }}]" value="3" required>
                                <label for="multimedia" class="form-check-label">Multimedia</label>
                            </div>
                            {{-- <br>
                            <button type="button" class="btn btn-danger">{{ ('Hapus Pertanyaan') }}</button><br> --}}
                        </div>
                    </div>
    
                    {{-- <label for="options">Pilihan:</label>
                    <div class="options">
                        <div class="option">
                            <label for="radioOption0">Opsi 1:</label>
                            <input type="radio" id="radioOption0" name="radioOptions0" value="">
                            <input type="text" name="textOptions" value="">
                            <button type="button" class="remove-option">Hapus</button>
                        </div>
                    </div> --}}
    
                    {{-- <button type="button" class="addOptionButton">Tambah Pilihan</button><br> --}}
                {{-- </div> --}}
                @endfor
                <div class="row">
                    <button class="btn btn-primary mt-5" type="submit">{{ _('Add') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>


