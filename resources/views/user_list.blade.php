{{-- @extends('layouts.app') --}}
@extends('layouts.nav')
@section('content')
<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>


                    </tr>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>21537144042</td>
                    <td>Raihan Baihaqi</td>
                    <td>baihaqi@gmail.com</td>
                </tbody>
            </table>
            <a href="/home" class="btn btn-primary w-25 mt-3">Kembali</a>
        </div>
    </div>
</div>



@endsection
