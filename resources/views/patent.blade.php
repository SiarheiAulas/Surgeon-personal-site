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
        <div class="main-text main-patent">
            <img class="patent-img" src="{{asset('/public/img/patent.jpg')}}" alt="patent">
            <div class="custom-button-5">
                <a href="{{route('publs.show',['publ'=>'35'])}}" target="_self">{{__('patent.description')}}</a>
            </div>
        </div>
    </div>
</x-app-layout>