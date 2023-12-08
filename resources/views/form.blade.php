@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    {{ 'Tell me your interest' }}
                </div>
                @if (Route::has('login'))
                    @auth
                        @if(Auth::user()->id)
                <div class="card-body">
                    <form action="/result/{{ $user_id }}/" method="POST">
                        @csrf
                        <p>semester anda:</p>
                        <input type="radio" class="form-check-input" name="semester" id="semester4" value="4" required>
                        <label for="semester4" class="form-check-label">4</label>
                        <input type="radio" class="form-check-input ms-3" name="semester" id="semester5" value="5" required>
                        <label for="semester5" class="form-check-label">5</label>
                        <input type="radio" class="form-check-input ms-3" name="semester" id="semester6" value="6" required>
                        <label for="semester6" class="form-check-label">6</label>
                        @foreach ($questions as $index => $question)
                            <div class="card mt-2">
                                <div class="card-header">
                                    <strong style="margin-right: 5px">{{ $index + 1 }}.</strong>
                                    <b>{{ $question->question }}</b>
                                    {{-- <b>{{ $id[$index]->id }}</b>
                                    <b>{{ $type[$index]->concentration_id }}</b> --}}
                                    
                                </div>
                                <div class="card-body">

                                    @error('respons.' . $index . '.jawaban')
                                        <h5><b class="text-danger">{{ $message }}</b></h5>
                                    @enderror

                                    <ul class="list-group">
                                        <label for="1{{ $id[$index]->id }}">
                                            <li class="list-group-item">
                                                <input type="radio" name="respons[{{ $index }}][jawaban]"
                                                    id="1{{ $id[$index]->id}}" style="margin-right: 10px" value="1"
                                                    {{ old('respons.' . $index . '.jawaban') == '1' ? 'checked' : '' }} required>Ya
                                                <input type="hidden" name="respons[{{ $index }}][id]"
                                                    value="{{ $id[$index]->id }}">
                                                <input type="hidden" name="respons[{{ $index }}][type]" value="{{ $type[$index]->concentration_id }}">
                                            </li>
                                        </label>
                                        <label for="0{{ $id[$index]->id }}">
                                            <li class="list-group-item mt-2">
                                                <input type="radio" name="respons[{{ $index }}][jawaban]"
                                                    id="0{{ $id[$index]->id }}" style="margin-right: 10px" value="0"
                                                    {{ old('respons.' . $index . '.jawaban') == '0' ? 'checked' : '' }} required>Tidak
                                                <input type="hidden" name="respons[{{ $index }}][id]"
                                                    value="{{ $id[$index]->id }}">
                                                <input type="hidden" name="respons[{{ $index }}][type]" value="{{ $type[$index]->concentration_id }}">
                                            </li>
                                        </label>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <br>
                        <p class="text-center">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </p>
                    </form>
                </div>  @endif
                    @endauth
                @else
                    <h1 class="text-danger">Maaf halaman ini tidak dapat diakses</h1>
                @endif
            </div>

        </div>
    </div>
@endsection
