<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['maquina_id', 'data', 'horario', 'nome_operador', 'nome_curso'];

    // Relacionamento com máquinas (muitos-para-um)
    public function maquina()
    {
        return $this->belongsTo(Maquina::class);
    }

    // Relacionamento com ações de manutenção (um-para-muitos)
    public function acoes()
    {
        return $this->hasMany(AcaoManutencao::class);
    }
}