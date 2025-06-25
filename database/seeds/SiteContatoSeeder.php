<?php

use App\SiteContato;
use Illuminate\Database\Seeder; // Import the SiteContato model

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(85) 99999-9999';
        $contato->email = 'contaton@sistemasg.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja Bem Vindo ao Sistema SG!';
        $contato->save();
        */
        factory(SiteContato::class, 100)->create(); // Create 100 fake records
    }
}
