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
        <div class="contain-button">
            <div class="custom-button-3">
                <a href="{{route('reviews.create')}}">{{__('review.button')}}</a>
            </div>
        </div>
        @each ('reviews.review', $reviews , 'review', 'reviews.noreview')
    </div>
    <x-pagination>
        {{$reviews->links()}}
    </x-pagination>
</x-app-layout>