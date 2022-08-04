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

        return view('respostas.index', ['respostas' => $respostas, 'turmas' => $turmas]);
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
 
        return view('respostas.show', ['respostas' => $respostas]);
    }
 
    // function destroy($id){
 
    //     DB::table('respostas')
    //         ->where('id_respostas', $id)
    //         ->delete();
    //     return redirect('/respostas');
    // }
}
