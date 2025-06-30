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
    public function handle($request, Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (false) {
            return $next($request);
        } else {
            return Response('acesso negado, rota precisa de autenticacao');
        }
    }
}
