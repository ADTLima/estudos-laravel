<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N',
            'cnpj' => '123',
            'ddd' => '11', // Sao Paulo (SP)
            'telefone' => '789',
            ],
            1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'cnpj' => '456',
            'ddd' => '85', // Fortaleza (CE)
            'telefone' => '456',
            ],
            2 => [
            'nome' => 'Fornecedor 3',
            'status' => 'S',
            'cnpj' => '789',
            'ddd' => '32', // Juiz de fora (MG)
            'telefone' => '123',
            ],
            3 => [
            'nome' => 'Fornecedor 4',
            'status' => 'S',
            'cnpj' => '789',
            'ddd' => '32', // Juiz de fora (MG)
            'telefone' => '123',
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
