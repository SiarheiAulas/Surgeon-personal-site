<x-app-layout>
    <x-slot name="title">
        @include('locale')
    </x-slot>
    <div class="admin">
        <div class="menu main-section-menu">
            <h1>
                @include('locale')
            </h1>    
        </div>
        <div class="admin-menu">
            <p><a href="{{route('posts.create')}}">{{__('admin.news')}}</a></p>
            <p><a href="{{route('publs.create')}}">{{__('admin.publications')}}</a></p>
            <p><a href="{{route('confs.create')}}">{{__('admin.conferences')}}</a></p>
            <p><a href="{{route('bios.create')}}">{{__('admin.cv')}}</a></p>
            <p><a href="{{route('landings.create')}}">{{__('admin.mainpage')}}</a></p>
        </div>
        <div class="contain-button">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="hidden" value="delete">
                <button class="custom-button-1" type="submit">{{__('admin.exit')}}</button> 
            </form>
        </div>
    </div>
</x-app-layout>