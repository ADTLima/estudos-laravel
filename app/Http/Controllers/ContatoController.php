<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    public function Contato()
    {
        //var_dump($_GET);
        var_dump($_POST);

        return view('site.contato', ['titulo' => 'Contato']);
    }
}
