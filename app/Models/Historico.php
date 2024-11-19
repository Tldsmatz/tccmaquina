<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $fillable = ['id_maq_oleo', 'operador', 'curso', 'acao_realizada', 'data_hora'];

    // Relacionamento com a máquina
    public function maquina()
    {
        return $this->belongsTo(Maquina::class, 'id_maq_oleo');
    }
}