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
            <form action="{{route('landings.store')}}" method="post">
               @csrf
                <div class="form-fields">
                    <label for="ru_text">{{__('landing.rutext')}}</label>
                    <textarea id="ru_text" class="form-input textarea-general" title="{{__('landing.rutextttitle')}}" name="ru_text">{{old('ru_text')}}</textarea>
                    <script>
                        tinymce.init({
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
                    <label for="en_text">{{__('landing.entext')}}</label>
                    <textarea id="en_text" class="form-input textarea-general" title="{{__('landing.entexttitle')}}" name="en_text">{{old('en_text')}}</textarea>
                </div>
                <div class="form-fields">
                    <input type="submit" class="custom-button-4" value="{{__('layout.add')}}">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
