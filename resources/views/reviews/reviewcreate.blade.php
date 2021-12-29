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
        <div class="contain-errors">
            @include('errors')
        </div>
        <div class="main-text">
            <form action="{{route('reviews.store')}}" method="post">
                @csrf
                <div class="form-fields">
                    <label for="header">{{__('review.header')}}</label>
                    <input type="text" class="form-input" title="{{__('review.headrtitle')}}" id="header" name="header" value="{{old('header')}}">
                </div>
                <div class="form-fields">
                    {{__('review.rating')}}
                    <label for="1">1</label>
                    <input type="radio" class="" title="{{__('review.ratingtitle')}}" id="1" name="rating" value="1">
                    <label for="2">2</label>
                    <input type="radio" class="" title="{{__('review.ratingtitle')}}" id="2" name="rating" value="2">
                    <label for="3">3</label>
                    <input type="radio" class="" title="{{__('review.ratingtitle')}}" id="3" name="rating" value="3">
                    <label for="4">4</label>
                    <input type="radio" class="" title="{{__('review.ratingtitle')}}" id="4" name="rating" value="4">
                    <label for="5">5</label>
                    <input type="radio" class="" title="{{__('review.ratingtitle')}}" id="5" name="rating" value="5" checked>
                </div>
                <div class="form-fields">
                    <label for="email">{{__('review.email')}}</label>
                    <input type="email" class="form-input" title="{{__('reviews.emailtitle')}}" id="email" name="email" value="{{old('email')}}">
                    <small class="helper-text">{{__('review.emailhelper')}}</small>
                </div>
                <div class="form-fields">
                    <label for="from">{{__('review.name')}}</label>
                    <input type="text" class="form-input" title="{{__('review.nametitle')}}" id="from" name="from"  value="{{old('from')}}">
                </div>
                <div class="form-fields">
                    <label for="text">{{__('review.text')}}</label>
                    <textarea id="text" class="form-input textarea-general" title="{{__('review.texttitle')}}" name="text">{{old('text')}}</textarea>
                    <script>
                        tinymce.init({
                            forced_root_block : "",
                            selector: 'textarea',
                            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
                            toolbar_mode: 'floating',
                            tinycomments_mode: 'embedded',
                            tinycomments_author: 'Author name',
                        });
                    </script>
                </div>
                <div class="form-fields">
                    <input type="submit"  class="custom-button-4" value="{{__('review.add')}}">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>