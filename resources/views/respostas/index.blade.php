@extends('base.index')

@if ($confirma_periodo != null)
@section('container')
<form action='/respostas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    
    
    @include('components.field', ['type'=> 'text', 'name' => 'nome_aluno', 'label' => 'Nome do Aluno', 'value' => ""])
    <div class="mb-2 mt-2">
    <label for="turma" class="form-label">Turma:</label>
    @include('components.selectTurma', ['turmas'=> $turmas])
    </div>
    <div class="mb-2 mt-2">
    <label for="curso" class="form-label">Curso</label>
    @include('components.selectCurso', ['name' => 'nome_cursos', 'label' => 'Curso', 'cursos'=> $cursos])
  </div>
    @include('components.field', ['type'=> 'number', 'name' => 'cpf', 'label' => 'CPF', 'value' => ""])
    <div class="mb-2">
        <label for="uf" class="form-label">UF</label>
        <select name="uf" id="uf" class="form-control">

        </select>        
        <input type="hidden" value="" name="uf_id"/>
    </div>
    <div class="mb-2">
        <label for="cidade" class="form-label">Cidade</label>
        <select name="cidade" class="form-control" id="cidade">       
        </select> 
    </div>                    
    <div class="mb-2">
        <label for="transporte">Selecione o tipo de transporte</label>
        <div class="form-check">
          <select name="" id="">
            <option value="onibus">Ônibus</option>
            <option value="van">Van</option>
            <option value="microonibus">Micro-ônibus</option>
          </select>
        </div>
    </div>
    <div class="mb-2">
        <label for="poder_publico_responsavel">Poder Público Responsável</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="poder_publico_responsavel" id="prefeitura">
            <label class="form-check-label" for="prefeitura">
              Prefeitura
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="poder_publico_responsavel" id="estado">
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
        <input type="text" value="" name="diferenca_paga" class="form-control" id="diferenca_paga">
    </div>
    <a class="btn btn-danger" href="/home">Voltar</a>    
    <script src="{{ asset('/js/integraAPI.js') }}" rel="stylesheet"></script>
    @include('components.button', ['color'=> 'primary', 'label' => 'Salvar Resposta', 'type' => 'submit'])
  </form>
@endsection

@elseif($confirma_periodo != null)

@endif