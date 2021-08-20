<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(FornecedorSeed::class);
        $this->call(SiteContatoSeed::class);
    }
}
