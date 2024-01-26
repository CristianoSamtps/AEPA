<div class="form-group">
    <label for="inputTitulo">Título</label>
    <input type="text" class="form-control" name="titulo" id="inputTitulo"
        value="{{ old('titulo', isset($projeto) ? $projeto->titulo : '') }}" />
</div>
<div class="form-group">
    <label for="inputSubtitulo">Subtítulo</label>
    <input type="text" class="form-control" name="subtitulo" id="inputSubtitulo"
        value="{{ old('subtitulo', isset($projeto) ? $projeto->subtitulo : '') }}" />
</div>
<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="inputDescricao"
        value="{{ old('descricao', isset($projeto) ? $projeto->descricao : '') }}" />
</div>
<div class="form-group">
    <label for="inputEstado">Estado</label>
    <select class="form-control" name="estado" id="inputEstado">
        @foreach (\App\Models\Projeto::estado_opcoes() as $value => $label)
            <option value="{{ $value }}"
                {{ old('estado', isset($projeto) ? $projeto->estado : '') == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="inputLocalidade">Localidade</label>
    <input type="text" class="form-control" name="localidade" id="inputLocalidade"
        value="{{ old('localidade', isset($projeto) ? $projeto->localidade : '') }}" />
</div>
<div class="form-group">
    <label for="inputObjetivos">Objetivos</label>
    <input type="number" class="form-control" name="objetivos" id="inputObjetivos" step="0.01"
        value="{{ old('objetivos', isset($projeto) ? $projeto->objetivos : '') }}" />
</div>
<div class="form-group">
    <label for="inputDataFinal">Data Final</label>
    <input type="date" class="form-control" name="data_final" id="inputDataFinal"
        value="{{ old('data_final', isset($projeto) ? $projeto->data_final : '') }}" />
</div>
<div class="form-group">
    <label for="inputVoluntariado">Voluntariado</label>
    <select class="form-control" name="voluntariado" id="inputVoluntariado">
        <option value="1"
            {{ old('voluntariado', isset($projeto) && $projeto->voluntariado == 1 ? 'selected' : '') }}>Sim</option>
        <option value="0"
            {{ old('voluntariado', isset($projeto) && $projeto->voluntariado == 0 ? 'selected' : '') }}>Não</option>
    </select>
</div>
<div class="form-group">
    <label for="inputLoc">Parcerias</label>
    @foreach ($partnerships as $partnership)
        @php
            $isChecked = $projeto->partnerships->contains($partnership->id);
        @endphp
        <div class="form-check">
            <input type="checkbox" name="partnerships[]" value="{{ $partnership->id }}"
                {{ $isChecked ? 'checked' : '' }}>
            <label class="form-check-label">{{ $partnership->name }}</label>
        </div>
    @endforeach
</div>
<div class="form-group">
    <label for="inputImage">Fotografia</label>
    <input type="file" class="form-control-file" name="fotografia" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Por favor, faça o upload de uma imagem válida. O tamanho da imagem não deve exceder 2MB. </small>
</div>
