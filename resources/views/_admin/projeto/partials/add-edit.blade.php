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
    <label for="inputFotografia">Fotografia</label>
    <input type="file" class="form-control" name="fotografias" id="inputFotografia"/>
</div>

@if ($projeto->fotografias->isNotEmpty())
    <img src="{{ asset('img/Cidades/' . $projeto->fotografias->first()->foto) }}" alt="Imagem Existente">
@endif

{{-- <div class="form-group">
    <label for="inputDataFinal">Data Final</label>
    <input type="date" class="form-control" name="data" id="inputDataFinal"
        value="{{ old('data', date_format(date_create($projetos->data_final), 'm-d-Y')) }}" />
</div> --}}
{{-- <div class="form-group">
    <label for="inputVoluntariado">Voluntariado</label>
    <select class="form-control" name="voluntariado" id="inputVoluntariado">
        <option value="1" {{ old('voluntariado', $projetos->voluntariado) == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ old('voluntariado', $projetos->voluntariado) == 0 ? 'selected' : '' }}>Não</option>
    </select>
</div> --}}
{{-- <div class="form-group">
    <label for="inputLoc">Parceiros</label>
    <select name="partnerships[]" multiple>
        @foreach ($partnerships as $p)
            <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select>
</div> --}}
