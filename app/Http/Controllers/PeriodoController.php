<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{
    function index(){
        $periodos = DB::table('periodos')
        ->SelectRaw('id_periodos, ano, dt_inicio, dt_fim')
        ->orderBy('ano')
        ->get();

        return view('periodos.index', ['periodos' => $periodos]);
    }

    function create(){
        return view('periodos.create');
    }

    function store(Request $request){
        $data = $request->all();
 
        unset($data['_token']);
 
        DB::table('periodos')->insert($data);
 
        return redirect('/periodos');
    }

    function edit($id){

        $periodos = DB::table('periodos')->find($id);
 
        return view('periodos.edit', ['periodos' => $periodos]);
 
    }
    function update(Request $request){
        $data = $request->all();
        unset($data['_token']);
        
        $id = array_shift($data);

        DB::table('periodos')
            ->where('id_periodos',$id)
            ->update(array_intersect_key($data,['ano'=>1,'dt_inicio'=>1, 'dt_fim'=>1]));
 
        return redirect('/periodos');
    }
 
    function show($id){
        $periodos = DB::table('periodos')
            ->selectRaw("
                id_periodos,
                ano,
                dt_inicio,
                dt_fim
                ")
            ->find($id);
 
        return view('periodos.show', ['periodos' => $periodos]);
    }
 
    function destroy($id){
 
        DB::table('periodos')
            ->where('id_periodos', $id)
            ->delete();
        return redirect('/periodos');
    }
}
