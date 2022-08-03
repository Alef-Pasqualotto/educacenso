@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$periodos->id_periodos}}</li>
    <li>Nome: {{$periodos->ano}}</li>
    <li>Sobrenome: {{$periodos->dt_inicio}}</li>
    <li>Sobrenome: {{$periodos->dt_fim}}</li>
</ul>
<a href="/periodos">Voltar</a>

@endsection
