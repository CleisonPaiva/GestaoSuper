<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;

class FornecedorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Fornecedor::create([
           'nome'=>'Fornecedor1',
           'site'=>'fornecedor.com.br',
           'uf'=> 'ES',
           'email'=>'cleison@teste.com'
       ]);
    }
}
