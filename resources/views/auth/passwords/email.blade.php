@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-2" style="border-radius: 10px;background-color:#F2F2F2;">
                <div class="card-body p-4" style="background-color:#F2F2F2;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="{{ route('passwords.token') }}">
                        @csrf
                        <div class="w-100 d-flex align-items-center justify-content-center mb-5 mt-3">
                            <img style="width:250px" src="{{ asset('img/logo.svg') }}" alt="Logotipo">           
                        </div>
                        <div class="w-100 mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                            @error('email')
                            <div class=" p-2 text-center font-sm mb-2 fw600" style="background-color: #F8CACA;color:#A70000;" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="col-md-12 mb-4">
                                <div class="d-flex align-items-center gap-2 input-login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope icon-color" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                    </svg> 
                                    <input
                                    id="email" 
                                    placeholder="Digite seu email" 
                                    type="email" 
                                    class="input rounded form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email" 
                                    autofocus
                                    >
                                </div>

                                
                            </div>
                        </div>

                        <div class="w-100 mb-5 col-md-12 w-100">
                            <div class="d-flex flex-column w-100">
                                <button type="submit" class="btn btn-primary hug"  style="background-color: #0024A5">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
