<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request; // Import the User model if needed

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('site.login', ['titulo' => 'Login - Sistema de Cadastro']);
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

        echo "Usuário: $email <br>";
        echo "Senha: $password <br>";

        //iniciar o model user

        $user = new User();
        $existe = $user->where('email', $email)->where('password', $password)->get()->first();

        echo '<pre>';
        print_r($existe);
        echo '</pre>';
    }
}
