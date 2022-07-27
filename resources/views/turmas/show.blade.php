@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$turma->id}}</li>
    <li>Nome: {{$turma->turma}}</li>
    <li>Sobrenome: {{$turma->curso}}</li>
</ul>
<a href="/turmas">Voltar</a>

@endsection
