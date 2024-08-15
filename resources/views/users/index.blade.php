@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-2">
            <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">
                <div class="card-body p-4 bg-white rounded-0" style="border-radius: 20px; border: 0px solid #fff">

                    <!-- Botão Novo Registro -->
                    <div class="mb-4">
                        <a class="btn bg-primary-custom btn-text-color" href="{{ route('users.create') }}">
                            + Novo Registro
                        </a>
                    </div>

                    <!-- Tabela -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>CNPJ</th>
                                    <th>Razão social</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Celular</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00.111.222/0001-33</td>
                                    <td>Nome ficticio</td>
                                    <td>email@ficticio.com.br</td>
                                    <td>(19) 1234-5678</td>
                                    <td>(19) 91234-5678</td>
                                    <td><span class="badge bg-success px-2 py-1">Ativo</span></td>
                                    <td>
                                        <a href="#" class="text-primary"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="text-warning mx-2"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00.222.333/0001-44</td>
                                    <td>Nome ficticio 2</td>
                                    <td>email@ficticio2.com.br</td>
                                    <td>(19) 1234-5678</td>
                                    <td>(19) 91234-5678</td>
                                    <td><span class="badge bg-danger px-2 py-1">Inativo</span></td>
                                    <td>
                                        <a href="#" class="text-primary"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="text-warning mx-2"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <!-- Repetir para as outras linhas -->
                                <!-- ... -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
