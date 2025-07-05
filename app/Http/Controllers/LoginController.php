<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request; // Import the User model if needed

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';
        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha inválidos';
        } elseif ($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para acessar a página';
        } elseif ($request->get('erro') == 3) {
            $erro = 'Você precisa deslogar antes de realizar um novo login';
        }

        return view('site.login', ['titulo' => 'Login - Sistema de Cadastro', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];

        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) precisa ser um e-mail válido.',
            'senha.required' => 'O campo senha é obrigatório.',
        ];

        //recuperamos parametro do formulario
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        //iniciar o model user

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.clientes');
        } else {
            return redirect()->route('site.login', ['erro' => 1])
                ->with('erro', 'Usuário e/ou senha inválidos');
        }
    }

    public function sair()
    {
        session_destroy();

        return redirect()->route('site.index');
    }
}
