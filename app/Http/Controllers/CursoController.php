<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    function index(){
        $cursos = DB::table('cursos')->SelectRaw('id_cursos, nome_cursos, nome_reduzido')
        ->orderBy('nome_cursos')
        ->get();
        return view('cursos.index', ['cursos' => $cursos, 'title' => 'Cursos']);
    }

    function create(){
        return view('cursos.create', ['title' => 'Inserir curso']);
    }

    function store(Request $request){
        $data = $request->all();
        var_dump($data);
        unset($data['_token']);
 
        DB::table('cursos')->insert($data);
 
        return redirect('/cursos');
    }

    function edit($id){

        $cursos = DB::table('cursos')->where('id_cursos', $id)->first();
 
        return view('cursos.edit', ['cursos' => $cursos, 'title' => 'Editar cursos']);
 
    }
    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);
        
        $id = array_shift($data);

        DB::table('cursos')
            ->where('id_cursos',$id)
            ->update(array_intersect_key($data,['nome_cursos'=>1,'nome_reduzido'=>1]));
 
        return redirect('/cursos');
    }
 
    function show($id){
        $cursos = DB::table('cursos')
            ->selectRaw("
                id_cursos,
                nome_cursos,
                nome_reduzido
                ")
            ->Where('id_cursos',$id)
            ->first();
 
        return view('cursos.show', ['cursos' => $cursos, 'title' => 'Cursos']);
    }
 
    function destroy($id){
 
        DB::table('cursos')
            ->where('id_cursos', $id)
            ->delete();
        return redirect('/cursos');
    }

}
