
<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="foto" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputRole">Previlégios</label>
    <select name="tipo" id="inputRole" class="form-control">
        <option value="A" {{old('tipo',$user->tipo)=='A'?'selected':''}}>Administrador</option>
        <option value="N" {{old('tipo',$user->tipo)=='M'?'selected':''}}>Membro ou Doador</option>
    </select>
</div>


@if ($user->tipo=='M')

@endif
