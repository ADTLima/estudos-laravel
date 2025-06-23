<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;

class fornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'www.fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'www.fornecedor200.com.br',
            'uf' => 'TO',
            'email' => 'contato@fornecedor200.com.br',
        ]);
        // Usando o método DB para inserir diretamente na tabela
        /*
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'www.fornecedor300.com.br',
            'uf' => 'TO',
            'email' => 'contato@fornecedor300.com.br',
        ]);
        */
    }
}
