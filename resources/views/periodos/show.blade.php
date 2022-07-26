@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$periodo->id}}</li>
    <li>Nome: {{$periodo->ano}}</li>
    <li>Sobrenome: {{$periodo->dt_inicio}}</li>
    <li>Sobrenome: {{$periodo->dt_fim}}</li>
</ul>
<a href="/periodos">Voltar</a>

@endsection
