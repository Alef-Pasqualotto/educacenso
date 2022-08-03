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

        return view('respostas.index', ['respostas' => $respostas]);
    }

    function create(){
        return view('respostas.create');
    }

    function store(Request $request){
        $data = $request->all();
 
        unset($data['_token']);
 
        DB::table('respostas')->insert($data);
 
        return redirect('/respostas');
    }

    function edit($id){

        $respostas = DB::table('respostas')->find($id);
 
        return view('respostas.edit', ['respostas' => $respostas]);
 
    }
    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);
        
        $id = array_shift($data);

        DB::table('respostas')
            ->where('id_respostas',$id)
            ->update(array_intersect_key($data,[ 'periodo_id'=>1, 'nome_aluno'=>1, 'turma_id'=>1, 'cpf'=>1, 'cidade'=>1, 'cidade_id'=>1, 'uf'=>1, 'uf_id'=>1, 'transporte'=>1, 'poder_publico_responsavel'=>1, 'diferenca_paga'=>1]));
 
        return redirect('/respostas');
    }
 
    function show($id){
        $respostas = DB::table('respostas')
            ->selectRaw("
            id_respostas, 
            periodo_id, 
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
 
        return view('respostas.show', ['respostas' => $respostas]);
    }
 
    function destroy($id){
 
        DB::table('respostas')
            ->where('id_respostas', $id)
            ->delete();
        return redirect('/respostas');
    }
}
