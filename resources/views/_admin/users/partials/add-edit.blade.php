<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com" value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="foto" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputDN">Data de nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" id="inputDN" value="{{old('data_nascimento',$user->data_nascimento)}}" />
</div>

<div class="form-group">
    <label for="inputTL">Telemovel</label>
    <input type="text" class="form-control" name="telemovel" id="inputTL" value="{{old('telemovel',$user->telemovel)}}" />
</div>

<div class="form-group">
    <label for="inputTL">Password</label>
    <input type="password" class="form-control" name="password" id="inputTL" value="" />
</div>

<div class="form-group">
    <label for="inputTL">Confirmar Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="inputTL" value="" />
</div>

<div class="form-group">
    <label for="inputG">Género</label>
    <select name="genero" id="inputG" class="form-control">
        <option value=""> </option>
        <option value="F" {{old('genero',$user->genero)=='F'?'selected':''}}>Feminino</option>
        <option value="M" {{old('genero',$user->genero)=='M'?'selected':''}}>Maculino</option>
        <option value="O" {{old('genero',$user->genero)=='O'?'selected':''}}>Outro</option>
        <option value="N" {{old('genero',$user->genero)=='N'?'selected':''}}>Prefiro não dizer</option>
    </select>
</div>