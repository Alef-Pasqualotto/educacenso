<select name="turma_id" id="turma_id">
    @foreach($turmas as $turma)
    <option value="{{$turma->id_turmas}}">{{$turma->nome_turma}}</option>
</select>
@endforeach