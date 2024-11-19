<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TornoController extends Controller
{
    public function maquina()
    {
        
        return view('pagTorno.blade.php');
    }

    public function create()
    {
        // Lógica para mostrar o formulário de criação
        return view('torno.create');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar um novo torneio
        // Validação e salvamento no banco de dados
    }
}