<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade');
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->foreignId('unidade_id')
                ->after('id')
                ->constrained('produtos')
                ->onDelete('cascade');
        });

        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->foreignId('unidade_id')
                ->after('produto_id')
                ->constrained('produtos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
        });

        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
        });

        Schema::dropIfExists('unidades');
    }
}
