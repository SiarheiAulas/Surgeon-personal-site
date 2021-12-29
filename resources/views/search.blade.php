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
        <div class="contain-errors">
            @include('errors')
        </div>
        <div class="main-text">
            @if(!$confs->first()&&!$posts->first()&&!$publs->first())
                    {{__('layout.emptysearch')}}
            @endif
            @isset($confs)
                @foreach ($confs as $conf)
                    @if(session('locale')=='en')
                        <div class="search-result">
                            <div class="search-header">
                                <a href="{{route('confs.show', ['conf'=>$conf])}}" target="_self">{{$conf->en_header}}</a>
                            </div>
                            <div class="search-preview">
                                <p>{{substr(strip_tags($conf->en_description), 0, 250)}}...</p>
                            </div>
                            <hr>
                        </div>
                    @else
                        <div class="search-result">
                            <div class="search-header">
                                <a href="{{route('confs.show', ['conf'=>$conf])}}" target="_self">{{$conf->ru_header}}</a>
                            </div>
                            <div class="search-preview">
                                <p>{{substr(strip_tags($conf->ru_description), 0, 250)}}...</p>
                            </div>
                            <hr>
                        </div>
                    @endif
                @endforeach
            @endisset
            @isset($publs)
                @foreach ($publs as $publ)
                    @if(session('locale')=='en')
                        <div class="search-result">
                            <div class="search-header">
                                <a href="{{route('publs.show', ['publ'=>$publ])}}" target="_self">{{$publ->en_header}}</a>
                            </div>
                            <div class="search-preview">
                                <p>{{substr(strip_tags($publ->en_abstract), 0, 250)}}...</p>
                            </div>
                            <hr>
                        </div>
                    @else
                        <div class="search-result">
                            <div class="search-header">
                                <a href="{{route('publs.show', ['publ'=>$publ])}}" target="_self">{{$publ->ru_header}}</a>
                            </div>
                            <div class="search-preview">
                                <p>{{substr(strip_tags($publ->ru_abstract), 0, 250)}}...</p>
                            </div>
                            <hr>
                        </div>
                    @endif
                @endforeach
            @endisset
            @isset($posts)
                @foreach ($posts as $post)
                    @if(session('locale')=='en')
                        <div class="search-result">
                            <div class="search-header">
                                <a href="{{route('posts.show', ['post'=>$post])}}" target="_self">{{$post->en_header}}</a>
                            </div>
                            <div class="search-preview">
                                <p>{{substr(strip_tags($post->en_body), 0, 250)}}...</p>
                            </div>
                            <hr>
                        </div>
                    @else
                        <div class="search-result">
                            <div class="search-header">
                                <a href="{{route('posts.show', ['post'=>$post])}}" target="_self">{{$post->ru_header}}</a>
                            </div>
                            <div class="search-preview">
                                <p>{{substr(strip_tags($post->ru_body), 0, 250)}}...</p>
                            </div>
                            <hr>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </div>
</x-app-layout>