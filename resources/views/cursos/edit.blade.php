@extends('base.index')

@section('container')
<form action='/cursos/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $cursos->id }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'nome', 'label' => 'Nome do Curso', 'value' => $curso->nome])
    @include('components.field', ['type' => 'text', 'name' => 'nome_reduzido', 'label' => 'Nome Reduzido', 'value' => $turma->nome_reduzido])
    <a class="btn btn-danger" href="/pessoas">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
