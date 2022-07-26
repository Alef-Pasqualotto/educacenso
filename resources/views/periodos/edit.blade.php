@extends('base.index')

@section('container')
<form action='/periodos/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $periodos->id }}" name="id"/>

    @include('components.field', ['type' => 'number', 'name' => 'ano', 'label' => 'Ano', 'value' => $periodo->ano])
    @include('components.field', ['type' => 'date', 'name' => 'dt_inicio', 'label' => 'Data de Início', 'value' => $periodo->dt_inicio])
    @include('components.field', ['type' => 'date', 'name' => 'dt_fim', 'label' => 'Data Final', 'value' => $periodo->dt_fim])
    <a class="btn btn-danger" href="/pessoas">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
