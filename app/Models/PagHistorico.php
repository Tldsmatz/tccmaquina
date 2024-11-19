<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $table = 'historicos';

    protected $fillable = [
        'maquina_id',
        'nome_operador',
        'curso',
        'data',
        'horario',
        'troca_oleo_lubrificacao',
        'troca_oleo_refrigeracao',
        'troca_oleo_pneumatico',
        'utilizacao'
    ];

    // Relacionamento com a tabela de máquinas
    public function maquina()
    {
        return $this->belongsTo(Maquina::class);
    }
}