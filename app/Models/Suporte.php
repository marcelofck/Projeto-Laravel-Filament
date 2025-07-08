<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    /** @use HasFactory<\Database\Factories\SuporteFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'status',
        'prioridade',
        'categoria',
        'user_id',
        'atendente_id',
        'data_resolucao',
        'solucao',
    ];

    protected $casts = [
        'status' => 'string',
        'prioridade' => 'string',
        'categoria' => 'string',
        'data_resolucao' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function atendente()
    {
        return $this->belongsTo(User::class, 'atendente_id');
    }
}
