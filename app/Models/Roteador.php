<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roteador extends Model
{
    /** @use HasFactory<\Database\Factories\RoteadorFactory> */
    use HasFactory;

    protected $fillable = [
        'nome',
        'ip_address',
        'modelo',
        'fabricante',
        'status',
        'localizacao',
        'descricao',
    ];

    protected $casts = [
        'status' => 'string',
    ];
}
