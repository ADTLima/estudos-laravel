<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function Contato(Request $request)
    {
        dd($request);

        return view('site.contato', ['titulo' => 'Contato']);
    }
}
