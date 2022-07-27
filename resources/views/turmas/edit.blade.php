@extends('base.index')

@section('container')
<form action='/pessoas/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $pessoa->id }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'turma', 'label' => 'Turma', 'value' => $turma->turma])
    @include('components.field', ['type' => 'text', 'name' => 'curso', 'label' => 'Curso', 'value' => $turma->curso])
    <a class="btn btn-danger" href="/pessoas">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
