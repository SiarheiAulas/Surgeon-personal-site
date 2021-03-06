<x-app-layout>
    <x-slot name="title">
        @include('locale')
    </x-slot>
    <div class="admin">    
        <div class="menu">
            <h1>
                @include('locale')
            </h1>    
        </div>
        <div class="main-text">
            <div class="title">
                <h2><a href="{{route('confs.show', ['conf'=>$conf])}}">
                    @if (session('locale')=='en')
                        {{$conf->en_header}}
                    @else
                        {{$conf->ru_header}}
                    @endif</a></h2>
            </div>
            <div class="date">
                <h3>{{__('conf.date')}}{{date('d.m.Y', strtotime($conf->start_date))}} 
                    @isset($conf->end_date)
                        - {{date('d.m.Y', strtotime($conf->end_date))}}
                    @endisset
                </h3>
            </div>
            <div>
                @if (session('locale')=='en')
                    {!!$conf->en_description!!}
                @else
                    {!!$conf->ru_description!!}
                @endif
            </div>
            @isset($conf->url_video)
                <div class="admin-buttons">
                    <a href="{{$conf->url_video}}" target="_blank">{{__('conf.video')}}</a>
                </div>
            @endisset
            <div class="admin-buttons">
                <a href="{{route('download', ['file'=>$conf->url_pdf, 'id'=>$conf->id])}}">{{__('conf.presentationdownload')}}</a>
            </div>
             @auth()
                <div class="admin-buttons">
                    <form action="{{route('confs.destroy', $conf->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="delete">
                        <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
                    </form>
                </div>
                <div class="admin-buttons">
                    <a href="{{route('confs.edit', $conf->id)}}">{{__('layout.edit')}}</a>
                </div>
            @endauth
            <div class="admin-buttons">
                <a href="{{route('confs.index')}}">{{__('conf.conflist')}}</a>
            </div>
        </div>
    </div>
</x-app-layout>