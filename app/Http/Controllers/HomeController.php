<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maquina; // Importa o modelo de máquinas

class HomeController extends Controller
{
    public function index()
{
    $maquinas = Maquina::all(); // Recupera todas as máquinas
    return view('home', compact('maquinas'));
}
}