@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-2">
                <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">
                    <div class="users-create card-body p-4 bg-white radius-20" style="border-radius: 20px; border: 0px solid #fff">

                        <div class="w-full d-flex justify-content-center fw-bold mb-5 mt-5 primary-color">
                            <p>Registrar Perfil</p>
                        </div>
                        <form class="box-form" action="" method="POST">
                            @method('POST')
                            @csrf

                            <div class="mb-4">
                                <div class="input-box mb-2">
                                    <label for="name">Nome do perfil</label>
                                    <input type="text" name="name" required>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="switch">
                                        <input type="checkbox" id="ativo" name="ativo">
                                        <label for="ativo" class="switch-label"></label>

                                    </div>
                                    <label class="label-ativo" for="ativo">Ativo</label>
                                </div>
                            </div>
                            <div class="rounded-4 w-100 bg-roles p-5 d-flex flex-column align-items-center mb-5" style="">
                                <div class="title-roles mb-3">
                                    Cadastros
                                </div>
                                <div class="d-flex gap-4 align-items-center mb-5">
                                    <p>Perfis de acesso</p>
                                    <div class=" p-2 d-flex flex-column align-items-start" style="">
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Visualizar a tela de perfis</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Visualizar um perfil</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Editar um perfil</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Excluir um perfil </p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Criar um perfil</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-4 align-items-center">
                                    <p>Usuários</p>
                                    <div class=" d-flex flex-column align-items-start border border-primary" style="">
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Visualizar a tela de usuários</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Visualizar um usuário</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Editar um usuário</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Excluir um usuário</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <input type="checkbox">
                                            <p class="p-0 m-0">Criar um usuário</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-box justify-content-between">
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
