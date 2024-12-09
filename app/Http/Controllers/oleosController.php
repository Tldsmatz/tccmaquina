<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Models\Oleo;
use Illuminate\Http\Request;

class oleosController extends Controller
{   
    public function oleos($id){
        $maquinas = Maquina::where('id',2)->first();
        $oleosAll = Oleo::all();

        return view('pagMaq', compact('oleosAll', 'maquinas'));
    }
}
