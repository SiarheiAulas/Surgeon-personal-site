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
        @each('confs.conf', $conference, 'conf', 'confs.noconfs')
    <x-pagination>
        {{$conference->links()}}
    </x-pagination>
            </div>
</x-app-layout>