<select name="turma_id" id="turma_id" class="form-select">
    @foreach($turmas as $turma)
    <option value="{{$turma->id_turmas}}">{{$turma->nome_turmas}}</option>
@endforeach
</select>