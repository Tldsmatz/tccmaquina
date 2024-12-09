<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'imagem', 'ultima_manutencao'];

    // Relacionamento com óleos (muitos-para-muitos)
    public function oleos()
    {
        return $this->belongsToMany(Oleo::class)->withTimestamps();
    }

    // Relacionamento com registros de manutenção (um-para-muitos)
    public function registros()
    {
        return $this->hasMany(Registro::class);
    }

    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}
