
<div class="form-group">
    <label for="inputSubtitulo">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name', isset($partner) ? $partner->name : '') }}" />
</div>
<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="inputDescricao" value="{{ old('descricao', isset($partner) ? $partner->descricao : '') }}" />
</div>
<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="foto" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>