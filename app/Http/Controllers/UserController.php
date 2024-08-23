<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
//        dd($users);
        $teste = 'Hello Index';
        return view('users.index', compact('teste', 'users'));
    }

    public function create()
    {
        $teste = 'Hello Create';
        return view('users.create', compact('teste'));
    }

//    public function store(Request $request)
//    {
//        $teste = $request->all();
//        dd($teste);
//    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function store(Request $request) {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->nome_usuario = $request->nome_usuario;
            $user->email = $request->email;
            $user->recuperar_email = $request->recuperar_email;
            $user->tel = $request->tel;
            $user->cel = $request->cel;
            $user->funcao = $request->funcao;
            $user->localidade = $request->localidade;
            $user->perfil_acesso = $request->perfil_acesso;

            if($request->ativo) {
                $user->ativo = "1";
            } else {
                $user->ativo = "0";
            }

            $user->password = bcrypt($request->senha);

            $user->save();

            // Enviar senha por e-mail se o checkbox estiver marcado
            if ($request->has('enviar_email')) {
                dd('Enviar e-mail');
            }

            return redirect()->route('users.index')->with('success', 'Usuário registrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao salvar: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id) {
        try {
//            dd($request->all());
            $user = User::findOrFail($id);

            $user->name = $request->name;
            $user->nome_usuario = $request->nome_usuario;
            $user->email = $request->email;
            $user->recuperar_email = $request->recuperar_email;
            $user->tel = $request->tel;
            $user->cel = $request->cel;
            $user->funcao = $request->funcao;
            $user->localidade = $request->localidade;
            $user->perfil_acesso = $request->perfil_acesso;

            if($request->ativo) {
                $user->ativo = "1";
            } else {
                $user->ativo = "0";
            }

            $user->save();

            return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao atualizar o usuário');
        }
    }

    public function destroy($id) {
        try {
            // Encontra o usuário pelo ID
            $user = User::findOrFail($id);

            // Deleta o usuário
            $user->delete();

            // Redireciona para a lista de usuários com uma mensagem de sucesso
            return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao deletar o usuário');
        }
    }


}
