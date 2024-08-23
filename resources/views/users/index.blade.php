@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-2">
            <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">
                <div class="card-body p-4 bg-white rounded-0" style="border-radius: 20px; border: 0px solid #fff">

                    <!-- Botão Novo Registro -->
                    <div class="mb-4">
                        <a class="novo-registro" href="{{ route('users.create') }}">
                            + Novo Registro
                        </a>
                    </div>

                    <!-- Tabela -->
                    <div class="table-responsive">
                        <table id="tabela-usuarios" class="table table-bordered table-hover">
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
                                @foreach($users as $user)
                                    <tr>
                                        <td>xpto</td>
                                        <td>xpto</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->tel }}</td>
                                        <td>{{ $user->cel }}</td>
                                        <td>
                                            @if($user->ativo == '1')
                                                <span class="bg-success p-1 rounded-4 px-3 text-light fw-bold">Ativo</span>
                                            @else
                                                <span class="bg-danger p-1 rounded-4 px-3 text-light fw-bold">Inativo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
