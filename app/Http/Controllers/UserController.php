<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $teste = 'Hello Index';
        return view('users.index', compact('teste'));
    }

    public function create()
    {
        $teste = 'Hello Create';
        return view('users.create', compact('teste'));
    }

    public function store(Request $request)
    {
        $teste = $request->all();
        dd($teste);
    }

    public function edit()
    {
        $teste = 'Hello Edit';
        return view('users.edit', compact('teste'));
    }

//    public function store(Request $request) {
//        try {
//            $data = $request->all();
//            dd($data);
//            // Validação dos dados
//            $validatedData = $request->validate([
//                'name' => 'required|string|max:255',
//                'nome_usuario' => 'required|string|max:255|unique:users,nome_usuario',
//                'email' => 'required|string|email|max:255|unique:users,email',
//                'recuperar_email' => 'required|string|email|max:255',
//                'tel' => 'required|string|max:15',
//                'cel' => 'required|string|max:15',
//                'funcao' => 'required|string|max:255',
//                'localidade' => 'required|string|max:255',
//                'perfil_acesso' => 'required|integer',
//                'senha' => 'required|string|min:8',
//                'ativo' => 'sometimes|boolean',
//            ]);
//
//            // Criação do novo usuário
//            $user = new Users();
//            $user->name = $validatedData['name'];
//            $user->nome_usuario = $validatedData['nome_usuario'];
//            $user->email = $validatedData['email'];
//            $user->recuperar_email = $validatedData['recuperar_email'];
//            $user->tel = $validatedData['tel'];
//            $user->cel = $validatedData['cel'];
//            $user->funcao = $validatedData['funcao'];
//            $user->localidade = $validatedData['localidade'];
//            $user->perfil_acesso = $validatedData['perfil_acesso'];
//            $user->senha = bcrypt($validatedData['senha']);
//            $user->ativo = $request->has('ativo') ? 1 : 0;
//
//            $user->save();
//
//            // Enviar senha por e-mail se o checkbox estiver marcado
//            if ($request->has('enviar_email')) {
//                // Lógica para enviar o e-mail com a senha
//            }
//
//            return redirect()->route('users.index')->with('success', 'Usuário registrado com sucesso!');
//        } catch (\Exception $e) {
//            return redirect()->back()->with('error', 'Erro ao salvar: ' . $e->getMessage());
//        }
//    }

//    public function update(Request $request, $id) {
//        try {
//            // Encontra o usuário pelo ID
//            $user = Users::findOrFail($id);
//
//            // Validação dos campos do formulário
//            $validatedData = $request->validate([
//                'name' => 'required|string|max:255',
//                'nome_usuario' => 'required|string|max:255|unique:users,nome_usuario,' . $user->id,
//                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
//                'recuperar_email' => 'required|email|max:255',
//                'tel' => 'required|string|max:15',
//                'cel' => 'required|string|max:15',
//                'funcao' => 'required|string|max:255',
//                'localidade' => 'required|string|max:255',
//                'perfil_acesso' => 'required|integer|in:1,2,3',
//                'senha' => 'nullable|string|min:6',  // A senha é opcional ao atualizar
//                'ativo' => 'nullable|boolean'
//            ]);
//
//            // Atualiza os campos do usuário
//            $user->name = $validatedData['name'];
//            $user->nome_usuario = $validatedData['nome_usuario'];
//            $user->email = $validatedData['email'];
//            $user->recuperar_email = $validatedData['recuperar_email'];
//            $user->tel = $validatedData['tel'];
//            $user->cel = $validatedData['cel'];
//            $user->funcao = $validatedData['funcao'];
//            $user->localidade = $validatedData['localidade'];
//            $user->perfil_acesso = $validatedData['perfil_acesso'];
//
//            // Atualiza a senha, se uma nova senha for fornecida
//            if ($request->filled('senha')) {
//                $user->senha = bcrypt($validatedData['senha']);
//            }
//
//            // Verifica se o checkbox "ativo" foi marcado
//            $user->ativo = $request->has('ativo') ? true : false;
//
//            // Salva as alterações no banco de dados
//            $user->save();
//
//            // Redireciona para a lista de usuários com uma mensagem de sucesso
//            return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
//        } catch (\Exception $e) {
//            return redirect()->back()->with('error', 'Erro ao atualizar o usuário');
//        }
//    }

//    public function destroy($id) {
//        try {
//            // Encontra o usuário pelo ID
//            $user = Users::findOrFail($id);
//
//            // Deleta o usuário
//            $user->delete();
//
//            // Redireciona para a lista de usuários com uma mensagem de sucesso
//            return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso!');
//        } catch (\Exception $e) {
//            return redirect()->back()->with('error', 'Erro ao deletar o usuário');
//        }
//    }


}
