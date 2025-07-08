<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    /** @use HasFactory<\Database\Factories\AvisoFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo',
        'conteudo',
        'tipo',
        'prioridade',
        'ativo',
        'data_inicio',
        'data_fim',
    ];

    protected $casts = [
        'tipo' => 'string',
        'prioridade' => 'string',
        'ativo' => 'boolean',
        'data_inicio' => 'datetime',
        'data_fim' => 'datetime',
    ];
}
