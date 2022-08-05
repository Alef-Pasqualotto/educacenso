@extends('base.index')

@section('container')
<form action='/turmas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'nome_turmas', 'label' => 'Turma', 'value' => ""])
    @include('components.selectCurso', ['name' => 'nome_cursos', 'label' => 'Curso', 'cursos'=> $cursos])
    <div class="mb-2 mt-2">
    <a class="btn btn-danger" href="/turmas">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
</div>
  </form>
@endsection
