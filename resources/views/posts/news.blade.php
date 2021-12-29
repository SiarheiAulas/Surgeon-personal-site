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
        @each('posts.post', $posts, 'post', 'posts.noposts')
    </div>
    <x-pagination>
        {{$posts->links()}}
    </x-pagination>
</x-app-layout>