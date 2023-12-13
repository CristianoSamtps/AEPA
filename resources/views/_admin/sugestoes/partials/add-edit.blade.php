<div class="form-group">
    <label for="nome">Nome</label>
    {{ $sugestao->member_doner->user->name}}
</div>

<div class="form-group">
    <label for="sugestao">Sugestão</label>
    {{ $sugestao->sugestao}}
 </div>

 <div class="form-group">
    <label for="">Aprovação</label>
        <select name="aprovacao">
            <option value="S" @if ($sugestao->aprovacao == 'S') selected @endif>Aprovado</option>
            <option value="N" @if ($sugestao->aprovacao == 'N') selected @endif>Não aprovado</option>
    </select>
 </div>

 <div class="form-group">
    <label for="inputLoc">Votos</label>
     {{ $sugestao->votos}}
 </div>

 <div class="form-group">
    <label for="inputLoc">Listado</label>

        <select name="listado">
                <option value="NL" @if ($sugestao->listado == 'NL') selected @endif>Não listado</option>
                <option value="L" @if ($sugestao->listado == 'L') selected @endif>Listado</option>
        </select>
 </div>


