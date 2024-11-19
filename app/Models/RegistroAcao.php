<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroAcao extends Model
{
    use HasFactory;

    protected $table = 'registro_acoes';
    protected $fillable = ['registro_id', 'acao_manutencao_id'];
}
