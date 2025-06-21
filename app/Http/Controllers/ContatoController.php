<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    public function Contato()
    {
        return view('site.contato', ['titulo' => 'Contato - teste']);
    }
}
