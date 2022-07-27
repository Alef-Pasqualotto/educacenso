@extends('base.index')

@section('container')
<form action='/pessoas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'turma', 'label' => 'Turma', 'value' => ""])
    @include('components.field', ['type'=> 'text', 'name' => 'curso', 'label' => 'Curso', 'value' => ""])
    <a class="btn btn-danger" href="/pessoas">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
