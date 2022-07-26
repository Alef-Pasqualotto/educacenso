<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    function index(){
        $cursos = DB::table('cursos')->SelectRaw('id, nome, nome_reduzido')->orderBy('nome')->get();
        return view('cursos.index', ['cursos' => $cursos]);
    }

    function create(){

    }

    function store(){
        
    }
}
