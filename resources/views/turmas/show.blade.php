@extends('base.index')

@section('container')

<ul>
    <li>ID: {{$turmas->id_turmas}}</li>
    <li>Nome: {{$turmas->nome_turmas}}</li>
    <li>ID do curso: {{$turmas->curso_id}}</li>
</ul>
<a class="btn btn-danger" href="/turmas">Voltar</a>

@endsection
