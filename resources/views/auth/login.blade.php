@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 " >
            <div class="card p-3" style="border-radius: 10px;background-color:#F2F2F2;" >
                <div class="card-body" style="background-color:#F2F2F2;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="w-100 d-flex align-items-center justify-content-center mb-5">
                            <img style="width:250px" src="{{ asset('img/logo.svg') }}" alt="Logotipo">           
                        </div>
                        <div class="d-flex flex-column align-items-center w-100">
                            <div class="w-100 mb-3">
                                @error('email')
                                    <div class=" p-2 text-center font-sm mb-2 fw600" style="background-color: #F8CACA;color:#A70000;" role="alert">
                                    {{ $message }}
                                    </div>
                                @enderror
                                  <div class="d-flex align-items-center gap-2 input-login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope icon-color" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                    </svg>
                                    <input
                                     id="email" 
                                     type="email" 
                                     class="input rounded form-control @error('email') is-invalid @enderror"
                                     name="email" value="{{ old('email') }}" 
                                     required 
                                     autocomplete="email" 
                                     autofocus 
                                     placeholder="Digite seu email">
                                     
                                  </div>
                               
                            </div>
    
                            <div class="w-100 mb-5">
                                <div class="d-flex align-items-center gap-2 input-login">
                                    @error('password')
                                        <span class="invalid-feedback p-2 text-center" style="background-color: rgb(241, 197, 197)" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key icon-color" viewBox="0 0 16 16">
                                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                    <input 
                                     id="password" 
                                     type="password" 
                                     class="input rounded form-control @error('password') is-invalid @enderror" 
                                     name="password" 
                                     required 
                                     autocomplete="current-password" 
                                     placeholder="Digite sua senha">
                                     <a id="show-password">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash icon-color pointer" viewBox="0 0 16 16">
                                            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                            <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                                        </svg>
                                     </a>
                                </div>
                            </div>
    
                            <div class="w-100 mb-0">
                                <button type="submit" class="btn btn-primary w-100 hug bold" style="background-color: #0024A5; border-radius: 4px;">
                                    
                                    {{ __('Entrar') }}
                                </button>
    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link underline w-100 text-center mt-2" style="color:#002bc9;" href="{{ route('password.request') }}">
                                        {{ __('Esqueci minha senha') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
