<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    /** @use HasFactory<\Database\Factories\AppFactory> */
    use HasFactory;

    protected $fillable = [
        'nome',
        'versao',
        'descricao',
        'status',
        'url',
        'categoria',
    ];

    protected $casts = [
        'status' => 'string',
    ];
}
