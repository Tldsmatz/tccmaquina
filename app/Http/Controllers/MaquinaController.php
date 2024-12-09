<?php

namespace App\Http\Controllers;

use App\Models\AcaoManutencao;
use App\Models\Maquina;
use App\Models\Oleo;
use App\Models\Registro;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    // Função para exibir a página inicial com todas as máquinas
    public function index()
    {
        // Recupera todas as máquinas do banco de dados
        $maquinas = Maquina::all();

        // Retorna a view 'home' passando as máquinas para a view
        return view('home', compact('maquinas'));
    }

    // Função para exibir os detalhes de uma máquina específica
    public function show($id)
    {
        // Busca a máquina pelo id no banco de dados
        $maquina = Maquina::findOrFail($id);

        // Retorna a view 'maquinas.show' com os dados da máquina
        return view('maquinas.show', compact('maquina'));
    }

    public function maquinas($id){
        $maquinas = Maquina::where('id', $id)->first();
        $oleosAll = Oleo::all();
        
        return view("pagMaq",compact('oleosAll','maquinas'));
    }

    public function registro(Request $request, $id){
        $request->validate([
            'nome' => ['required'],
            'curso' => ['required'],
            'data' => ['required'],
            'horario' => ['required'],
        ]);

        $registro = new Registro();
        $registro->nome_operador = $request->nome;
        $registro->nome_curso = $request->curso;
        $registro->data = $request->data;
        $registro->horario = $request->horario;

        $registro->maquina()->associate($id);

        $registro->save();

        if($request->has('acoes')){
            foreach($request->acoes as $acao){
                $a = new AcaoManutencao();
                $a->descricao = $acao;
                $a->registro()->associate($registro);

                $a->save();
            }
        }

        return redirect()->route('maquinas', ['id' => $id])->with('success', 'Registro realizado com sucesso');
    }

}