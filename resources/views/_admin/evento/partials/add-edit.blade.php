<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', $event->name) }}" />
</div>
<div class="form-group">
    <label for="inputdate">Data</label>
    <input type="date" class="form-control" name="data" id="inputdate"
        value="{{ old('data', date_format(date_create($event->data), 'Y-m-d')) }}" />
</div>
<div class="form-group">
    <label for="inputDesc">Descricão</label>
    <input type="text" class="form-control" name="descricao" id="inputdate"
        value="{{ old('descricao', $event->descricao) }}" />
</div>
{{-- <div class="form-group">
    <label for="inputVagas">Vagas</label>
    <input type="text" class="form-control" name="vagas" id="inputVagas"
        value="{{ old('vagas', $event->vagas) }}" />
</div> --}}
<div class="form-group">
    <label for="inputLoc">Localização</label>
    <input type="text" class="form-control" name="localizacao" id="inputLoc"
        value="{{ old('localizacao', $event->localizacao) }}" />
</div>
<div class="form-group">
    <label for="inputLoc">Parceiros</label>
    <select name="partnerships[]" multiple>
        @foreach ($partnerships as $p)
            <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="inputImage">Fotografia</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Por favor, faça o upload de uma imagem válida. O tamanho da imagem não deve exceder 2MB. </small>
</div>
