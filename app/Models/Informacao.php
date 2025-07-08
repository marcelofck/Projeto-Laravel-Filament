<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacao extends Model
{
    /** @use HasFactory<\Database\Factories\InformacaoFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo',
        'conteudo',
        'categoria',
        'tipo',
        'publico',
        'autor',
        'tags',
    ];

    protected $casts = [
        'tipo' => 'string',
        'publico' => 'boolean',
    ];
}
