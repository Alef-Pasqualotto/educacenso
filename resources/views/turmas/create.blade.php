@extends('base.index')

@section('container')
<form action='/turmas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'nome_turmas', 'label' => 'Turma', 'value' => ""])
    @include('components.field', ['type'=> 'text', 'name' => 'curso_id', 'label' => 'Curso', 'value' => ""])
    <a class="btn btn-danger" href="/turmas">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
