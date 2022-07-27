@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$curso->id}}</li>
    <li>Nome: {{$curso->nome}}</li>
    <li>Sobrenome: {{$curso->nome_reduzido}}</li>
</ul>
<a href="/cursos">Voltar</a>

@endsection
