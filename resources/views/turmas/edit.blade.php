@extends('base.index')

@section('container')
<form action='/turmas/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $turma->id_turmas }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'turma', 'label' => 'Turma', 'value' => $turma->nome_turmas])
    @include('components.field', ['type' => 'text', 'name' => 'curso', 'label' => 'Curso', 'value' => $turma->curso_id])
    <a class="btn btn-danger" href="/turmas">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
