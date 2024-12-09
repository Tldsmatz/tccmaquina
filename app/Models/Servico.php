<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public function maquina()
    {
        return $this->belongsTo(Maquina::class);
    }
}
