@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$turmas->id_turmas}}</li>
    <li>Nome: {{$turmas->nome_turmas}}</li>
    <li>Sobrenome: {{$turmas->curso}}</li>
</ul>
<a href="/turmas">Voltar</a>

@endsection
