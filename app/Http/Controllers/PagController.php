<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historico;
use App\Models\Maquina;

class MaquinaController extends Controller
{
    public function show($id)
    {
        // Buscar a máquina e os óleos recomendados
        $maquina = Maquina::findOrFail($id);
        $oleos = $maquina->oleos; // Presumindo que há uma relação entre máquina e óleos

        return view('maquina.show', compact('maquina', 'oleos'));
    }

    public function registrar(Request $request, $id)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'data' => 'required|date',
            'horario' => 'required',
        ]);

        // Criar novo registro no histórico
        $historico = new Historico();
        $historico->maquina_id = $id;
        $historico->nome_operador = $request->input('nome');
        $historico->curso = $request->input('curso');
        $historico->data = $request->input('data');
        $historico->horario = $request->input('horario');
        $historico->troca_oleo_lubrificacao = $request->has('lubrificacao') ? 1 : 0;
        $historico->troca_oleo_refrigeracao = $request->has('refrigeracao') ? 1 : 0;
        $historico->troca_oleo_pneumatico = $request->has('pneumatico') ? 1 : 0;
        $historico->utilizacao = $request->has('utilizacao') ? 1 : 0;

        // Salvar no banco de dados
        $historico->save();

        // Redirecionar para a página da máquina com uma mensagem de sucesso
        return redirect()->route('maquina.show', ['id' => $id])->with('success', 'Registro adicionado com sucesso.');
    }
}