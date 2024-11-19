<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oleo extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'tipo'];

    // Relacionamento com máquinas (muitos-para-muitos)
    public function maquinas()
    {
        return $this->belongsToMany(Maquina::class)->withTimestamps();
    }
}
