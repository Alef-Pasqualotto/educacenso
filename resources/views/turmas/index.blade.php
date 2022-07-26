@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/turmas/create">Nova turma</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Turma</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
            <tr>
                <td>{{$turma->turma}}</td>
                <td>{{$turma->curso}}</td>
                <td>
                    <a class="btn btn-warning" href="/turmas/{{$turma->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/turmas/{{$turma->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/turmas/{{$turma->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
