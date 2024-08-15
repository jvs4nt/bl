@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <img style="width:250px" src="{{ asset('img/logo.svg') }}" alt="Logotipo">            --}}
        <div class="col-md-12 p-2">
            <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">

                {{-- <div class="card-body p-4 bg-white rounded-0 d-flex flex-column jcc aic" style="border-radius: 20px; border: 0px solid #fff">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <p class="fw600">.{{ " " }}.{{ " " }}.</p>
                    <img style="width: 300px" src="{{ asset('img/logo.svg') }}" alt="Logotipo">

                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
