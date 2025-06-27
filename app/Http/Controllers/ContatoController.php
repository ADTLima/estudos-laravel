<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function Contato()
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ],
        [
            //'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres.',
            'nome.unique' => 'Já existe um contato com esse nome.',
            //'telefone.required' => 'O campo telefone é obrigatório.',
            //'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'motivo_contatos_id.required' => 'O campo motivo do contato é obrigatório.',
            //'mensagem.required' => 'O campo mensagem é obrigatório.',
            'required' => 'O campo :attribute é obrigatório.',
            'mensagem.max' => 'O campo mensagem deve ter no máximo 2000 caracteres.',
        ]
    );

        // Criação do contato
        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
