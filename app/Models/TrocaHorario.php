<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrocaHorario extends Model
{
    protected $fillable = [
        'colaborador_id',
        'colaborador_substituto_id',
        'data_hora_original',
        'data_hora_nova',
        'motivo',
    ];

    public function colaborador()
    {
        return $this->belongsTo(User::class, 'colaborador_id');
    }

    public function colaboradorSubstituto()
    {
        return $this->belongsTo(User::class, 'colaborador_substituto_id');
    }
}
