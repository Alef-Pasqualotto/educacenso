@extends('base.index')

@section('container')
<form action='/respostas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    
    
    @include('components.field', ['type'=> 'text', 'name' => 'nome_aluno', 'label' => 'Nome do Aluno', 'value' => ""])
    @include('components.selectTurma', ['turmas'=> $turmas])
    @include('components.field', ['type'=> 'number', 'name' => 'turma_id', 'label' => 'Turma', 'value' => ""])
    @include('components.field', ['type'=> 'number', 'name' => 'cpf', 'label' => 'CPF', 'value' => ""])
    <div class="mb-2">
        <label for="uf" class="form-label">UF</label>
        <input type="text" value="" name="uf" class="form-control" id="uf">
        <input type="hidden" value="" name="uf_id"/>
    </div>
    <div class="mb-2">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" value="" name="cidade" class="form-control" id="cidade">
        <input type="hidden" value="" name="cidade_id" id="cidade_id">
    </div>
    <div class="mb-2">
        <label for="transporte">Transporte</label>
        <select class="form-select">
          <option selected>Selecione o tipo de transporte</option>
          <option value="onibus">Ônibus</option>
          <option value="micro-onibus">Micro-ônibus</option>
          <option value="van">Van</option>
        </select>
    </div>
    <div class="mb-2">
        <label for="poder_publico">Poder Público Responsável</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="poder_publico" id="prefeitura">
            <label class="form-check-label" for="poder_publico1">
              Prefeitura
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="poder_publico" id="estado">
            <label class="form-check-label" for="poder_publico2">
              Estado
            </label>
        </div>
    </div>
    <div class="mb-2">
        <label for="poder_publico">Você paga alguma diferença?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="paga_diferenca" id="sim">
            <label class="form-check-label" for="paga_diferenca1">
              Sim
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="paga_diferenca" id="nao">
            <label class="form-check-label" for="paga_diferenca2">
              Não
            </label>
        </div>
    </div>
    <div class="mb-2" style="display:none" id="form_valor_diferenca">
        <label for="valor_diferenca" class="form-label">Qual o valor?</label>
        <input type="text" value="" name="valor_diferenca" class="form-control" id="valor_diferenca">
    </div>
    <a class="btn btn-danger" href="/home">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Salvar Resposta', 'type' => 'submit'])
  </form>
@endsection