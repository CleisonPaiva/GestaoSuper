<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_filiais', function (Blueprint $table) {
            $table->foreignId('produto_id')
                ->constrained('produtos')
                ->onDelete('cascade');

            $table->foreignId('filial_id')
                ->constrained('filiais')
                ->onDelete('cascade');

            $table->float('preco_venda',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_filiais');
    }
}
