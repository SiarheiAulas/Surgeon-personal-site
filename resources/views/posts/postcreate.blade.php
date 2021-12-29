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
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-fields">
                    <label for="ru_header">{{__('post.ruheader')}}</label>
                    <input id="ru_header" type="text" class="form-input" title="{{__('post.headertitle')}}" name="ru_header" value="{{old('ru_header')}}">
                </div>
                <div class="form-fields">
                    <label for="en_header">{{__('post.enheader')}}</label>
                    <input id="en_header" type="text" class="form-input" title="{{__('post.headertitle')}}" name="en_header" value="{{old('en_header')}}">
                </div>
                <div class="form-fields">
                    <label for="ru_body">{{__('post.runewstext')}}</label>
                    <textarea id="ru_body" class="form-input textarea-general" title="{{__('post.newstexttitle')}}" name="ru_body">{{old('ru_body')}}</textarea>
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
                    <label for="en_body">{{__('post.ennewstext')}}</label>
                    <textarea id="en_body" class="form-input textarea-general" title="{{__('post.newstexttitle')}}" name="en_body">{{old('en_body')}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="url">{{__('post.externallink')}}</label>
                    <input id="url" type="text" class="form-input" title="{{__('post.externallinktitle')}}" name="url" value="{{old('url')}}">
                </div>
                <div class="form-fields">
                    <label for="slug">{{__('post.slug')}}</label>
                    <input id="slug" type="text" class="form-input" title="{{__('post.slugtitle')}}" name="slug" value="{{old('slug')}}">
                </div>
                <div class="form-fields">
                    <label for="attach">{{__('post.file')}}</label>
                    <div>
                        <input type="file" title="{{__('post.filetitle')}}" name='attach' id="attach">
                    </div>
                </div>
                <div class="form-fields">
                    <input type="submit" class="custom-button-4" value="{{__('post.addnews')}}">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
