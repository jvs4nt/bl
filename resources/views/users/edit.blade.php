@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-2">
                <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">
                    <div class="users-edit card-body p-4 bg-white radius-20" style="border-radius: 20px; border: 0px solid #fff">

                        <div class="w-full d-flex justify-content-center fw-bold mb-5 mt-5 primary-color">
                            <p>Editar usuário</p>
                        </div>
                        <form class="box-form" action="{{ route('users.update', $user->id)  }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="d-flex justify-content-between">
                                <div class="input-box">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" value="{{ $user->name }}" required>
                                </div>
                                <div class="input-box">
                                    <label for="nome_usuario">Nome de usuário</label>
                                    <input type="text" name="nome_usuario" value="{{ $user->nome_usuario }}" required>
                                </div>
                                <div class="input-box">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" value="{{ $user->email }}" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="input-box">
                                    <label for="recuperar_email">E-mail <span class="recuperacao-acesso">(Recuperação de acesso)</span></label>
                                    <input type="text" name="recuperar_email" value="{{ $user->recuperar_email }}" required>
                                </div>
                                <div class="input-box">
                                    <label for="tel">Telefone</label>
                                    <input type="text" name="tel" value="{{ $user->tel }}" required>
                                </div>
                                <div class="input-box">
                                    <label for="cel">Celular</label>
                                    <input type="text" name="cel" value="{{ $user->cel }}" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mb-5">
                                <div class="input-box">
                                    <label for="funcao">Função</label>
                                    <input type="text" name="funcao" class="funcao" value="{{ $user->funcao }}" required>
                                </div>
                                <div class="input-box">
                                    <label for="localidade">Localidade</label>
                                    <input type="text" name="localidade" value="{{ $user->localidade }}" required>
                                </div>
                                <div class="input-box">
                                    <label for="perfil_acesso">Perfil de acesso</label>
                                    <select name="perfil_acesso" id="" required>
                                        <option value="">Selecione</option>
                                        <option value="1" {{ $user->perfil_acesso == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $user->perfil_acesso == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $user->perfil_acesso == 3 ? 'selected' : '' }}>3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="generate-password-box mb-5">
                                <div class="generate-password-row mb-5">
                                    <a class="generate-password-button fw-bold" id="gerar-senha">Gerar senha</a>
                                    <input type="password" name="senha" id="senha">
                                    <a id="show-generated-password" class="bg-light border border-1 border-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash text-primary pointer" viewBox="0 0 16 16">
                                            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                            <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                                        </svg>
                                    </a>
                                </div>

                                <div class="generate-password-checkbox">
                                    <div class="d-flex gap-2 mb-4">
                                        <input type="checkbox" name="enviar_email">
                                        <label for="enviar_email">Enviar senha no e-mail</label>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="switch">
                                            <input type="checkbox" id="ativo" name="ativo" {{ $user->ativo ? 'checked' : '' }}>
                                            <label for="ativo" class="switch-label"></label>
                                        </div>
                                        <label class="label-ativo" for="ativo">Ativo</label>
                                    </div>
                                </div>
                            </div>

                            <div class="button-box">
                                <a class="button-cancel" href="{{ route('users.index') }}">Cancelar</a>
                                <button class="button-submit" type="submit">Salvar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
