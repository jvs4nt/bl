@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-2">
            <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">
                <div class="users-create card-body p-4 bg-white rounded-0" style="border-radius: 20px; border: 0px solid #fff">

                    <div class="w-full d-flex justify-content-center fw-bold mb-3 primary-color">
                        <p>Registrar usuário</p>
                    </div>
                    <div class="box-form">
                        <div class="d-flex justify-content-between">
                            <div class="input-box">
                                <label for="">Nome</label>
                                <input type="text">
                            </div>
                            <div class="input-box">
                                <label for="">Nome de usuário</label>
                                <input type="text">
                            </div>
                            <div class="input-box">
                                <label for="">E-mail</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="input-box">
                                <label for="">E-mail</label>
                                <input type="text">
                            </div>
                            <div class="input-box">
                                <label for="">Telefone</label>
                                <input type="text">
                            </div>
                            <div class="input-box">
                                <label for="">Celular</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="input-box">
                                <label for="">Função</label>
                                <input type="text">
                            </div>
                            <div class="input-box">
                                <label for="">Localidade</label>
                                <input type="text">
                            </div>
                            <div class="input-box">
                                <label for="">Perfil de acesso</label>
                                <select name="" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="generate-password-box">
                        <div class="generate-password-row">
                            <a class="generate-password-button">Gerar senha</a>
                            <input type="text">
                        </div>
                        <div class="generate-password-checkbox">
                            <input type="checkbox">
                            <input type="checkbox">
                        </div>
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
