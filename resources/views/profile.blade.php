@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <p>halo
                @foreach($name as $name)
                {{ $name->name }}
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection