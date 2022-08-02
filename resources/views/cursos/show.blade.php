@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$curso->id_cursos}}</li>
    <li>Nome: {{$curso->nome_cursos}}</li>
    <li>Sobrenome: {{$curso->nome_reduzido}}</li>
</ul>
<a href="/cursos">Voltar</a>

@endsection
