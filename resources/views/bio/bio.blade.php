<div class="main-text">
    <div>
        <img src="{{asset('storage/'.$bio->photo)}}" alt="photo" height="195.875px">
    </div>
    <div class="sub-title">
        <h3>{{__('bio.university')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_univer!!}
        @else
            {!!$bio->ru_univer!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.intern')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_intern!!}
        @else
            {!!$bio->ru_intern!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.postgraduate')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_aspirant!!}
        @else
            {!!$bio->ru_aspirant!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.experience')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_departments!!}
        @else
            {!!$bio->ru_departments!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.courses')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_courses!!}
        @else
            {!!$bio->ru_courses!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.scientific')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_research_interes!!}
        @else
            {!!$bio->ru_research_interes!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.practic')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_practic_interes!!}
        @else
            {!!$bio->ru_practic!!}
        @endif
    </div>
    <div class="sub-title">
        <h3>{{__('bio.society')}}</h3>
        @if(session('locale')=='en')
            {!!$bio->en_society!!}
        @else
            {!!$bio->ru_society!!}
        @endif
    </div>
    @auth()
        <div class="admin-buttons">
            <form action="{{route('bios.destroy', $bio->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" value="delete">
                <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
            </form>
        </div>
        <div class="admin-buttons">
            <a href="{{route('bios.edit', $bio->id)}}">{{__('layout.edit')}}</a>
        </div>
    @endauth
    <div class="custom-button-5">
        <a href="{{route('feedback')}}" target="_self">{{__('layout.sendmsg')}}</a>
    </div>
</div>