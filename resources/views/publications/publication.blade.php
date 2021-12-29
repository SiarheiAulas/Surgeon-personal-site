<div class="main-text">
   <div class="title">
       <h2><a href="{{route('publs.show', ['publ'=>$publ])}}">
            @if(session('locale')=='en')
                {{$publ->en_header}}</a></h2>
            @else
                {{$publ->ru_header}}</a></h2>
            @endif
   </div>
   <div class="date">
       <h3>{{date('Y', strtotime($publ->date))}} {{__('publication.year')}}</h3>
   </div>
   <div class="sub-title">
       <h3>{{__('publication.biblio')}}</h3>
       @if(session('locale')=='en')
            {!!$publ->en_biblio!!}
       @else
            {!!$publ->ru_biblio!!}
       @endif
   </div>
   <div class="sub-title">
       <h3>{{__('publication.abstract')}}</h3>
       @if(session('locale')=='en')
            {!!$publ->en_abstract!!}
       @else
            {!!$publ->ru_abstract!!}
       @endif
   </div>
   @isset($publ->int_url)
       <div class="admin-buttons">
           <a href="{{route('download', ['file'=>$publ->int_url, 'id'=>$publ->id])}}">{{__('publication.download')}}</a>
       </div>
   @endisset
   <div class="admin-buttons">
       <a href="{{$publ->ext_url}}" target="_blank">{{__('publication.original')}}</a>
   </div>
   @auth()
       <div class="admin-buttons">
           <form action="{{route('publs.destroy', $publ->id)}}" method="post">
               @csrf
               @method('DELETE')
               <input type="hidden" value="delete">
               <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
           </form>
       </div>
       <div class="admin-buttons">
           <a href="{{route('publs.edit', $publ->id)}}">{{__('layout.edit')}}</a>
       </div>
    @endauth
</div>