<?php
namespace App\Http\Controllers;

use App\Models\AcaoManutencao;
use Illuminate\Http\Request;

class AcaoManutencaoController extends Controller
{
    // Lista todas as ações de manutenção
    public function index()
    {
        $acoes = AcaoManutencao::all();
        return view('acoes.index', compact('acoes'));
    }

    // Adiciona uma nova ação de manutenção
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        AcaoManutencao::create($validatedData);

        return redirect()->route('acoes.index')->with('success', 'Ação de manutenção adicionada com sucesso!');
    }
}