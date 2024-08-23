@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-2">
                <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">
                    <div class="card-body p-4 bg-white rounded-0" style="border-radius: 20px; border: 0px solid #fff">

                        <!-- Botão Novo Registro -->
                        <div class="mb-4">
                            <a class="novo-registro" href="{{ route('roles.create') }}">
                                + Novo Registro
                            </a>
                        </div>

                        <!-- Tabela -->
                        <div class="table-responsive">
                            <table id="tabela-usuarios" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Perfil de Acesso</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
