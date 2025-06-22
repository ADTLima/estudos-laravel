<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustesProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criar tabela filiais
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        //criar tabela produto_filiais
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();

            //foreign key para filiais
            $table->foreign('filial_id')->references('id')->on('filiais');
            //foreign key para produtos
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        //remover colunas da tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('preco_venda');
            $table->dropColumn('estoque_minimo');
            $table->dropColumn('estoque_maximo');
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
            $table->decimal('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('estoque_maximo')->default(0);
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
}
