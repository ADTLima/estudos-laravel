<?php

namespace App\Http\Middleware;

use App\LogAcesso;
use Closure;

class LogAcessoMiddleware
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
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "IP: $ip requisitou a Rota: $rota"]);

        //return $next($request);

        $resposta = $next($request);

        $resposta->setStatusCode(201, 'Requisição registrada com sucesso');

        return $resposta;
    }
}
