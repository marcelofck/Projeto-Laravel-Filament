<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roteadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('ip_address')->unique();
            $table->string('modelo');
            $table->string('fabricante');
            $table->enum('status', ['ativo', 'inativo', 'manutencao'])->default('ativo');
            $table->string('localizacao')->nullable();
            $table->text('descricao')->nullable();
            $table->text('dicas_configuracao')->nullable();
            $table->text('anotacoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roteadors');
    }
};
