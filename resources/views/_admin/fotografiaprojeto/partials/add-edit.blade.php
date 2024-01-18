<div class="form-group">
    <label for="inputImage">Fotografia</label>
    <input type="file" class="form-control-file" name="fotografia" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
        Por favor, faça o upload de uma imagem válida. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputDestaque">Destaque</label>
    <input type="checkbox" class="form-control-checkbox" name="destaque" id="inputDestaque" value="sim"
        {{ old('destaque') == 'sim' ? 'checked' : '' }}>
</div>
