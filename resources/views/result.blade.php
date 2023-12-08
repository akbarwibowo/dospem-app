@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">
                <div class="car-header fw-bold fs-3">
                    {{ __('Rekomendasi Mata Kuliah Anda') }}
                </div>

                <div class="card-body">
                    <div class="row text-start">
                        <p class="fs-5">Konsentrasi yang bisa anda ambil adalah: <span class="fw-bold">{{ $result }}</span></p>
                        <p class="fs-6">Mata kuliah pada semester <span class="fw-bold">{{ $semester }}</span> yang bisa anda ambil sesuai konsentrasi diatas adalah:</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Kuliah</th>
                                    <th>Konsentrasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subjects as $index=>$subject)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $subject->subject }}</td>
                                        <td>{{ $concentration[$index]->concentration }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="/home" class="btn btn-primary w-25 mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection