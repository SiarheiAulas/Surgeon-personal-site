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
        @each('publications.publication', $publication, 'publ', 'publications.nopublications')
    </div>
    <x-pagination>
        {{$publication->links()}}
    </x-pagination>
</x-app-layout>