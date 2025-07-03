<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        if ($metodo_autenticacao == 'padrao') {
            echo "Método de autenticação: $metodo_autenticacao e usuario $perfil <br>";
        }

        if ($metodo_autenticacao == 'ldap') {
            echo "Método de autenticação: $metodo_autenticacao e usuario $perfil <br>";
        }

        if ($perfil == 'visitante') {
            echo 'exibir apenas o perfil do visitante <br>';
        }

        echo "Método de autenticação: $metodo_autenticacao <br>";
        // Verifica se o usuário está autenticado
        if (false) {
            return $next($request);
        } else {
            return Response('acesso negado, rota precisa de autenticacao');
        }
    }
}
