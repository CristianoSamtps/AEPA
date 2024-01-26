<div class="form-group">
    <p>Membro/Doador</p>
    <input type="integer" hidden class="form-control" name="event_id" value="{{$event->id}}" id="inputdate"/>
    <select name="member_doner_id">
        @foreach ($members as $member)
            <option value="{{ $member->user->id }}" @if ($member->user->id == old('myselect')) selected="selected" @endif>
                {{ $member->user->name}}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="inputdate">Data inscrição</label>
    <input type="date" class="form-control" name="date" id="inputdate"
        value="{{ old('data', date_format(date_create($newparticipant->data), 'Y-m-d')) }}" />
</div>

<div class="form-group">
    <p>Observações</p>
    <textarea name="obs" style="width:100%" id="obs" cols="30" rows="10"
        value="{{ old('descricao', $newparticipant->obs) }}">
    </textarea>
</div>
