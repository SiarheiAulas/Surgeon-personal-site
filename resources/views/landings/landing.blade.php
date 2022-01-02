@if(session('locale')=='en')
    {!!$land->en_text!!}
@else
    {!!$land->ru_text!!}
@endif
@auth()
    <div class="admin-buttons">
        <form action="{{route('landings.destroy', $land->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" value="delete">
            <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
        </form>
    </div>
    <div class="admin-buttons"><a href="{{route('landings.edit', $land->id)}}">{{__('layout.edit')}}</a></div>
@endauth