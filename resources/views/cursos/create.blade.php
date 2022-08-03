@extends('base.index')

@section('container')
<form action='/cursos/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' required/>

    @include('components.field', ['type'=> 'text', 'name' => 'nome_cursos', 'label' => 'Nome do Curso', 'value' => ""])
    @include('components.field', ['type'=> 'text', 'name' => 'nome_reduzido', 'label' => 'Nome Reduzido', 'value' => ""])
    <a class="btn btn-danger" href="/cursos">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
