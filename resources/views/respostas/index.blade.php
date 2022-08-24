@extends('base.index')


@section('container')
@if ($confirma_periodo != null)
<form action='/respostas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    
    
    @include('components.field', ['type'=> 'text', 'name' => 'nome_aluno', 'label' => 'Nome do Aluno', 'value' => ""])
    
    <div class="mb-2 mt-2">
    <label for="curso" class="form-label">Curso</label>
    @include('components.selectCurso', ['name' => 'nome_cursos', 'label' => 'Curso', 'cursos'=> $cursos])
  </div>
    
    <div class="mb-2 mt-2">
    <label for="turma" class="form-label">Turma:</label>
    @include('components.selectTurma', ['turmas'=> $turmas])
    </div>
    
    <div class="mb-2 mt-2">
    <label for="cpf" class="form-label">CPF:</label>
    <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato nnn.nnn.nnn-nn" class="form-control" required>
    </div>
    
    <div class="mb-2">        
        <label for="uf" class="form-label">UF</label>
        <select name="uf" id="uf" class="form-select">

        </select>        
        <input type="hidden" value="" name="uf_id" id="uf_id"/>
    </div>
    <div class="mb-2">
        <input type="hidden" name="cidade_id" id="cidade_id">
        <label for="cidade" class="form-label">Cidade</label>
        <select name="cidade" class="form-select" id="cidade">       
        </select> 
    </div>              
    <div class="mb-2">
        <label for="transporte" class="form-label">Selecione o tipo de transporte</label>
          <select name="transporte" id="transporte" class="form-select">
            <option value="onibus">Ônibus</option>
            <option value="van">Van</option>
            <option value="microonibus">Micro-ônibus</option>
          </select>
    </div>
    <div class="mb-2">
        <label for="poder_publico_responsavel">Poder Público Responsável</label>
        <div class="form-check">
            <input class="form-check-input" type="radio"  value="municipio" name="poder_publico_responsavel" id="prefeitura">
            <label class="form-check-label" for="prefeitura">
              Prefeitura
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="estado" name="poder_publico_responsavel" id="estado">
            <label class="form-check-label" for="estado">
              Estado
            </label>
        </div>
    </div>
    <div class="mb-2" id="paga_diferenca">
        <label for="paga_diferenca">Você paga alguma diferença?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="paga_diferenca" id="sim">
            <label class="form-check-label" for="sim">
              Sim
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="paga_diferenca" id="nao">
            <label class="form-check-label" for="nao">
              Não
            </label>
        </div>
    </div>
    <div class="mb-2" style="display:none" id="form_valor_diferenca">
        <label for="diferenca_paga" class="form-label">Qual o valor?</label>
        <input type="number" value="" name="diferenca_paga" class="form-control" id="diferenca_paga">
    </div>
    <a class="btn btn-danger" href="/inicio">Voltar</a>    
    <script src="{{ asset('/js/integraAPI.js') }}" rel="stylesheet"></script>
    @include('components.button', ['color'=> 'primary', 'label' => 'Salvar Resposta', 'type' => 'submit'])
  </form>


@elseif($confirma_periodo == null)
  <h1>Não pode ser cadastrada nenhuma resposta fora do período</h1>
@endif
@endsection