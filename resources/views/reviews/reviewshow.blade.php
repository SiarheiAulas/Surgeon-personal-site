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
                <h2><a href="{{route('reviews.show', ['review'=>$review])}}">{{$review->header}}</a></h2>
            </div>
            <x-stars :stars="$review->rating"/>
            <div class="sub-sub-title">
                <h3>{{__('review.added')}}{{date('d.m.Y', strtotime($review->created_at))}}</h3>
            </div>
            <div class="sub-sub-title">
                {{$review->from}}
            </div>
            <hr>
            <div>
                {{$review->text}}
            </div>
            @auth()
                <div class="sub-title">
                    <h3>{{__('review.from')}}{{$review->email}}</h3>
                </div>
                <div class="admin-buttons">
                    <form action="{{route('reviews.destroy', $review->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="delete">
                        <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
                    </form>
                </div>
                <div class="admin-buttons">
                    <a href="{{route('reviews.edit', $review->id)}}">{{__('layout.edit')}}</a>
                </div>
            @endauth
            <div class="admin-buttons">
                <a href="{{route('reviews.index')}}">{{__('review.reviewslist')}}</a>
            </div>
        </div>
    </div>
</x-app-layout>