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
            @each('landings.landing', $landing, 'land', 'landings.nolandings')
        </div>
    </div>
</x-app-layout>