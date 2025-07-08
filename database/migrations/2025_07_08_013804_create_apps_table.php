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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('versao');
            $table->text('descricao')->nullable();
            $table->enum('status', ['ativo', 'inativo', 'desenvolvimento'])->default('ativo');
            $table->string('url')->nullable();
            $table->string('categoria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};
