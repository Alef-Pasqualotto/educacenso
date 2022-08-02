@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$cursos->id_cursos}}</li>
    <li>Nome do Curso: {{$cursos->nome_cursos}}</li>
    <li>Nome Reduzido: {{$cursos->nome_reduzido}}</li>
</ul>
<a href="/cursos">Voltar</a>

@endsection
