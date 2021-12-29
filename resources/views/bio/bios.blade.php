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
        @each('bio.bio', $bios, 'bio', 'bio.nobio')
    </div>
</x-app-layout>