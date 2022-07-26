<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    function index(){
        $turmas = DB::table('turmas')
        ->SelectRaw('id_turmas, nome_turmas, curso_id')
        ->orderBy('nome_turmas')
        ->get();

        return view('turmas.index', ['turmas' => $turmas]);
    }

    function create(){
        return view('turmas.create');
    }

    function store(Request $request){
        $data = $request->all();
 
        unset($data['_token']);
 
        DB::table('turmas')->insert($data);
 
        return redirect('/turmas');
    }

    function edit($id){

        $turmas = DB::table('turmas')->find($id);
 
        return view('turmas.edit', ['turmas' => $turmas]);
 
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
            ->find($id);
 
        return view('turmas.show', ['turmas' => $turmas]);
    }
 
    function destroy($id){
 
        DB::table('turmas')
            ->where('id_turmas', $id)
            ->delete();
        return redirect('/turmas');
    }

}
