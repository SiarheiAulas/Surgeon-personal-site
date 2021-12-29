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
            <form action="{{route('publs.update', ['publ'=>$publ])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-fields">
                    <label for="date">{{__('publication.date')}}</label>
                    <input id="date" type="date" class="form-input" title="{{__('publication.datetitle')}}" name="date" value="{{$publ->date}}">
                </div>
                <div class="form-fields">
                    <label for="ru_header">{{__('publication.ruheader')}}</label>
                    <input type="text" id="ru_header" class="form-input" title="{{__('publication.headertitle')}}" name="ru_header" value="{{$publ->ru_header}}">
                </div>
                <div class="form-fields">
                    <label for="en_header">{{__('publication.enheader')}}</label>
                    <input type="text" id="en_header" class="form-input" title="{{__('publication.headertitle')}}" name="en_header" value="{{$publ->en_header}}">
                </div>
                <div class="form-fields">
                    <label for="ru_biblio">{{__('publication.rubiblio')}}</label>
                    <textarea id="ru_biblio" class="form-input textarea-general" title="{{__('publication.bibliotitle')}}" name="ru_biblio">{{$publ->ru_biblio}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_biblio">{{__('publication.enbiblio')}}</label>
                    <textarea id="en_biblio" class="form-input textarea-general" title="{{__('publication.bibliotitle')}}" name="en_biblio">{{$publ->en_biblio}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="doi">DOI</label>
                    <input type="text" id="doi" class="form-input" title="{{__('publication.doititle')}}" name="doi" value="{{$publ->doi}}">
                </div>
                <div class="form-fields">
                    <label for="ru_abstract">{{__('publication.ruabstract')}}</label>
                    <textarea id="ru_abstract" class="form-input textarea-general" title="{{__('publication.abstracttitle')}}" name="ru_abstract">{{$publ->ru_abstract}}</textarea>
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
                    <label for="en_abstract">{{__('publication.enabstract')}}</label>
                    <textarea id="en_abstract" class="form-input textarea-general" title="{{__('publication.abstracttitle')}}" name="en_abstract">{{$publ->en_abstract}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ext_url">{{__('publication.originallink')}}</label>
                    <input type="text" id="ext_url" class="form-input" title="{{__('publication.originalurltitle')}}" name="ext_url" value="{{$publ->ext_url}}">
                </div>                
                <div class="form-fields">
                    <label for="pdf">{{__('publication.file')}}</label>
                    <div>
                        <input type="file" title="{{__('publication.filetitle')}}" name="pdf" id="pdf">
                    </div>
                </div>
                <div class="form-fields">
                    <input type="submit" class="custom-button-4" value="{{__('publication.update')}}">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>