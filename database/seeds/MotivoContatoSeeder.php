<?php

use App\MotivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::create(['motivo_contato' => 'Dúvida']);
        MotivoContato::create(['motivo_contato' => 'Elogio']);
        MotivoContato::create(['motivo_contato' => 'Reclamação']);
        MotivoContato::create(['motivo_contato' => 'Sugestão']);
        MotivoContato::create(['motivo_contato' => 'Outros']);
    }
}
