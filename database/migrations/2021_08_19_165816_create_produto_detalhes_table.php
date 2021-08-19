<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')
                ->unique('produto_id')
                ->constrained('produtos')
                ->onDelete('cascade');



            $table->float('comprimento',8,2)->default(0.01);
            $table->float('largura',8,2)->default(0.01);
            $table->float('altura',8,2)->default(0.01);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
