<div class="form-group">
    <label for="nome">Title</label>
    <input type="text" class="form-control" name="title" id="inputdate"
        value="{{ old('title', $doacao->title) }}" />
</div>

<div class="form-group">
    <label for="sugestao">Valor</label>
    {{ $doacao->valor}}
 </div>

 <div class="form-group">
    <label for="">Anonimo</label>
    @if ($doacao->anonimo == 'S') Anonimo
    @else {{ $doacao->member_doner->user->name}}
    @endif
 </div>

 <div class="form-group">
    <label for="inputLoc">Projeto</label>
    {{$doacao->projeto_id}}
 </div>



