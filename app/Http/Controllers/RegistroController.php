<?php
namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Maquina;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    
    // Registra uma manutenção para a máquina e associa as ações realizadas
    public function store(Request $request, $maquina_id)
    {
        // Valida os dados do formulário
        $validatedData = $request->validate([
            'nome_operador' => 'required|string|max:255',
            'nome_curso' => 'required|string|max:255',
            'data' => 'required|date',
            'horario' => 'required|date_format:H:i',
            'acoes' => 'required|array', // O checklist de ações
        ]);

        // Cria o registro da manutenção
        $registro = Registro::create([
            'maquina_id' => $maquina_id,
            'nome_operador' => $validatedData['nome_operador'],
            'nome_curso' => $validatedData['nome_curso'],
            'data' => $validatedData['data'],
            'horario' => $validatedData['horario'],
        ]);

        // Associa as ações de manutenção marcadas no checklist
        $registro->acoes()->attach($validatedData['acoes']);

        // Redireciona de volta para a página da máquina com uma mensagem de sucesso
        return redirect()->route('maquina.show', $maquina_id)->with('success', 'Manutenção registrada com sucesso!');
    }

    public function show($id)
    {
        // Busca a máquina pelo id no banco de dados
        $registros = Registro::findOrFail($id);

        // Retorna a view 'maquinas.show' com os dados da máquina
        return view('registro', compact('registros'));
    }
}