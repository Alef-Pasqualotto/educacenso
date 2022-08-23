<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    function index(){
        $respostas = DB::table('respostas')
        ->SelectRaw('id_respostas, periodo_id, nome_aluno, turma_id, cpf, cidade, cidade_id, uf, uf_id, transporte, poder_publico_responsavel, diferenca_paga')
        ->orderBy('id_respostas')
        ->get();

        $turmas = DB::select('SELECT * FROM turmas');
        $cursos = DB::select('SELECT * FROM cursos');
        $confirma_periodo = DB::select('SELECT dt_inicio, dt_fim FROM periodos
        WHERE NOW() between dt_inicio and dt_fim');

        return view('respostas.index', ['respostas' => $respostas, 'turmas' => $turmas, 'title'=> 'Respostas', 'confirma_periodo' => $confirma_periodo, 'cursos' => $cursos]);
    }

    function create(){
        return view('respostas.create', ['title' => 'Criar respostas']);
    }

    function store(Request $request){
        $data = $request->all();
 
        unset($data['_token']);
 
        DB::table('respostas')->insert($data);
 
        return redirect('/respostas');
    }
 
    function show($id){
        $respostas = DB::table('respostas')
            ->selectRaw("
            id_respostas, 
            periodo _id, 
            nome_aluno, 
            turma_id, 
            cpf, 
            cidade, 
            cidade_id, 
            uf, 
            uf_id, 
            transporte, 
            poder_publico_responsavel, 
            diferenca_paga
            ")
            ->find($id);
 
        return view('respostas.show', ['respostas' => $respostas, 'title' => 'Respostas']);
    }
 
    // function destroy($id){
 
    //     DB::table('respostas')
    //         ->where('id_respostas', $id)
    //         ->delete();
    //     return redirect('/respostas');
    // }
}
