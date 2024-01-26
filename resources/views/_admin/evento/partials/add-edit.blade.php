<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', $event->name) }}" />
</div>
<div class="form-group">
    <label for="inputdate">Data</label>
    <input type="datetime-local" class="form-control" name="data" id="inputdate"
        value="{{ old('data', ($event->data)) }}" />
</div>
<div class="form-group">
    <label for="inputDesc">Descricão</label>
    <input type="text" class="form-control" name="descricao" id="inputdate"
        value="{{ old('descricao', $event->descricao) }}" />
</div>

<div class="form-group">
    <label for="inputLoc">Localização</label>
    <input type="text" class="form-control" name="localizacao" id="inputLoc"
        value="{{ old('localizacao', $event->localizacao) }}" />
</div>

<div class="form-group">
    <label for="inputVag">Vagas</label>
    <input type="text" class="form-control" name="vagas" id="inputVag"
        value="{{ old('vagas', $event->vagas) }}" />
</div>

<div class="form-group">
    <label for="inputVag">Parcerias</label>
        @foreach ($partnerships as $partnership)
        @php
            $isChecked = $event->partnerships->contains($partnership->id);
        @endphp
        <div class="form-check">
            <input type="checkbox" name="partnerships[]" value="{{ $partnership->id }}" {{ $isChecked ? 'checked' : '' }}>
            <label class="form-check-label">{{ $partnership->name }}</label>
        </div>
        @endforeach
</div>





