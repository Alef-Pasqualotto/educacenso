@extends('base.index')

@section('container')
<form action='/turmas/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $turma->id_turmas }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'turma', 'label' => 'Turma', 'value' => $turma->nome_turmas])
    @include('components.selectCurso', ['name' => 'nome_cursos', 'label' => 'Curso', 'cursos'=> $cursos])
    <div class="mb-2 mt-2">
    <a class="btn btn-danger" href="/turmas">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</div>
</form>
@endsection
