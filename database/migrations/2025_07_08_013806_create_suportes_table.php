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
        Schema::create('suportes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->enum('status', ['aberto', 'em_andamento', 'resolvido', 'fechado'])->default('aberto');
            $table->enum('prioridade', ['baixa', 'media', 'alta', 'critica'])->default('media');
            $table->enum('categoria', ['tecnico', 'usuario', 'sistema', 'outros'])->default('outros');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('atendente_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('data_resolucao')->nullable();
            $table->text('solucao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suportes');
    }
};
