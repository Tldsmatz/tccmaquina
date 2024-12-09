<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use App\Models\Maquina;
use Illuminate\Http\Request;

class controladorController extends Controller
{
    public function home(){
        return view("home");
    }

    public function maquinas(){
        $maquinas = Maquina::where('id',2)->first();
        
        return view("pagMaq",compact('maquinas'));
    }

    public function torno(){
        $torno = Maquina::where('id',1)->first();
        
        return view('pagTorno',compact('torno'));
    }

    public function historico(){
        $historicos = Historico::all();

        return view('historico', compact('historicos'));
    }
}
