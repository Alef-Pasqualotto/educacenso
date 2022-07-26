@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/cursos/create">Novo Curso</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Nome Reduzido</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->curso}}</td>
                <td>{{$curso->curso}}</td>
                <td>
                    <a class="btn btn-warning" href="/cursos/{{$curso->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/cursos/{{$curso->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/cursos/{{$curso->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
