<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CRIAÇÃO DA TABELA CLIENTES VIA MIGRATION
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->string('cpf')->unique();; 
            $table->string('nome');
            $table->string('sobrenome');
            $table->date('nascimento');
            $table->string ('email')->unique();
            $table->string('telefone')->unique();;   
            $table->enum('sexo',['M','F']);
            $table->string('cep'); 
            $table->timestamps();
            // USADO STRING EM ALGUNS CAMPOS PARA NAO PEDER OS '0' A ESQUERDA E NAO ULTRAPASSAR O TAMANHO MAXIMO DO TIPO 'INTEGER'.
        });
    }

    // EXCLUSÃO DA TABELA CLIENTES VIA ROLLBACK
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
