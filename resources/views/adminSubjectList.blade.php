
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
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mata Kuliah</th>
                        {{-- <th>Program Studi</th> --}}
                        <th>Konsentrasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $index=>$subject)
                        <tr>
                            <td>{{ $id[$index]->id }}</td>
                            <td>{{ $subject->subject }}</td>
                            {{-- <td>{{ $majors[$index]->major }}</td> --}}
                            <td>{{ $concentrations[$index]->concentration }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>


