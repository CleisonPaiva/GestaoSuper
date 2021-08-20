<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::create([
            'nome'=>'Site teste',
            'telefone'=>'99999999',
            'email'=>'site@teste.com',
            'motivo_contato'=>2,
            'mensagem'=>'Mensagem'
        ]);
    }
}
