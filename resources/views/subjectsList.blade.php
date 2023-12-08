@extends('layouts.app')

@section('content')
<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
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
            <a href="/home" class="btn btn-primary w-25 mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection