<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaoManutencao extends Model
{
    use HasFactory;

    protected $table = 'acoes_manutencao';
    protected $fillable = ['descricao'];

    // Relacionamento com registros de manutenção (muitos-para-muitos)
    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}