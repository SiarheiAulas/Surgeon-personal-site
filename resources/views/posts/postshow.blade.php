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
                <h2><a href="{{route('posts.show', ['post'=>$post])}}">
                    @if(session('locale')=='en')
                        {{$post->en_header}}</a></h2>
                    @else
                        {{$post->ru_header}}</a></h2>
                    @endif
            </div>
            <div class="sub-header">
                {{__('post.added')}}{{date('d.m.Y', strtotime($post->created_at))}}
            </div>
            <hr>
            <div>
                @if(session('locale')=='en')
                    {!!$post->en_body!!}
                @else
                    {!!$post->ru_body!!}
                @endif
            </div>
            @isset($post->url)
                <div class="admin-buttons">
                    <a href="{{$post->url}}" target="_blank">{{__('post.sourcelink')}}</a>
                </div>
            @endisset
            @isset($post->attach)
                @if($post->attachextension=='jpg'||$post->attachextension=='png'||$post->attachextension=='bmp'||$post->attachextension=='gif')
                    <img src="{{asset('/public/storage/'.$post->attach)}}" alt="attached photo">
                @else
                    <div class="admin-buttons">
                        <a href="{{route('download', ['file'=>$post->attach, 'id'=>$post->id])}}">{{__('post.download')}}</a>
                    </div>
                @endif
            @endisset
            @auth()
               <div class="admin-buttons">
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="delete">
                        <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
                    </form>
               </div>
                    <div class="admin-buttons">
                        <a href="{{route('posts.edit', $post->id)}}">{{__('layout.edit')}}</a>
                    </div>
            @endauth
            <div class="admin-buttons">
                <a href="{{route('posts.index')}}" target="_self">{{__('post.newslist')}}</a>
            </div>
        </div>
    </div>
</x-app-layout>