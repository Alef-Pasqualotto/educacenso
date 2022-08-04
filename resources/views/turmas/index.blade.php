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
                <td>{{$turma->nome_turmas}}</td>
                <td>{{$turma->nome_cursos}}</td>
                <td>
                    <a class="btn btn-warning" href="/turmas/{{$turma->id_turmas}}/edit">Editar</a>
                    <a class="btn btn-info" href="/turmas/{{$turma->id_turmas}}/show">Ver</a>
                    <a class="btn btn-danger" href="/turmas/{{$turma->id_turmas}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
