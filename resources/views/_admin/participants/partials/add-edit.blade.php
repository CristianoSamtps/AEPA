<div class="form-group">
    <label for="inputName">Utilizador</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', $event->name) }}" />
</div>
<div class="form-group">
    <label for="inputdate">{{$participantsevent}}</label>
    <input type="date" class="form-control" name="data" id="inputdate"
        value="{{ old('data', date_format(date_create($event->data), 'Y-m-d')) }}" />
</div>
<div class="form-group">
    <label for="inputDesc">Observações</label>
    <input type="text" class="form-control" name="descricao" id="inputdate"
        value="{{ old('descricao', $event->descricao) }}" />
</div>

