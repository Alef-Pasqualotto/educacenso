<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    function index(){
        // $turmas = DB::table('turmas')
        // ->SelectRaw('id_turmas, nome_turmas, curso_id')        
        // ->orderBy('nome_turmas')
        // ->get();

        $turmas = DB::select('select id_turmas, nome_turmas, cursos.nome_cursos from turmas inner join cursos on cursos.id_cursos = turmas.curso_id order by nome_turmas');        

        return view('turmas.index', ['turmas' => $turmas, 'title' => 'Turmas']);
    }

    function create(){
        $cursos = DB::select('SELECT * FROM cursos');
        return view('turmas.create', ['title' => 'Inserir turma', 'cursos' => $cursos]);
    }

    function store(Request $request){
        $data = $request->all();
 
        unset($data['_token']);
 
        DB::table('turmas')->insert($data);
 
        return redirect('/turmas');
    }

    function edit($id){

        $turmas = DB::table('turmas')->where('id_turmas', $id)->first();
 
        return view('turmas.edit', ['turma' => $turmas, 'title' => 'Editar turma']);
 
    }
    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);
        
        $id = array_shift($data);

        DB::table('turmas')
            ->where('id_turmas',$id)
            ->update(array_intersect_key($data,['nome_turmas'=>1,'curso_id'=>1]));
 
        return redirect('/turmas');
    }
 
    function show($id){
        $turmas = DB::table('turmas')
            ->selectRaw("
                id_turmas,
                nome_turmas,
                curso_id
                ")
            ->Where('id_turmas',$id)
            ->first();
 
            $cursos = DB::select('SELECT * FROM cursos');

        return view('turmas.show', ['turmas' => $turmas, 'title' => 'Turmas']);
    }
 
    function destroy($id){
 
        DB::table('turmas')
            ->where('id_turmas', $id)
            ->delete();
        return redirect('/turmas');
    }

}
