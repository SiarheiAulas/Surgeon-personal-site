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
        <form action="{{route('confs.update', ['conf'=>$conf])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-fields">
                    <label for="start_date">{{__('conf.startdate')}}</label>
                    <input id="start_date" class="form-input" type="date" title="{{__('conf.startdatetitle')}}" name="start_date" value="{{$conf->start_date}}">
                </div>
                <div class="form-fields">
                    <label for="end_date">{{__('conf.enddate')}}</label>
                    <input id="end_date" class="form-input" type="date" title="{{__('conf.enddate')}}" name="end_date" value="{{$conf->end_date}}">
                </div>
                <div class="form-fields">
                    <label for="ru_header">{{__('conf.ruheader')}}</label>
                    <input type="text" class="form-input" id="ru_header" title="{{__('conf.headertitle')}}" name="ru_header" value="{{$conf->ru_header}}">
                </div>
                <div class="form-fields">
                    <label for="en_header">{{__('conf.enheader')}}</label>
                    <input type="text" class="form-input" id="en_header"title="{{__('conf.headertitle')}}"  name="en_header" value="{{$conf->en_header}}">
                </div>
                <div class="form-fields">
                    <label for="ru_description">{{__('conf.rudescription')}}</label>
                    <textarea id="ru_description" class="form-input textarea-general" title="{{__('conf.descriptiontitle')}}" name="ru_description">{{$conf->ru_description}}</textarea>
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
                    <label for="en_description">{{__('conf.endescription')}}</label>
                    <textarea id="en_description" class="form-input textarea-general" title="{{__('conf.descriptiontitle')}}" name="en_description">{{$conf->en_description}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="url_video">{{__('conf.videolink')}}</label>
                    <input type="text" id="url_video" class="form-input" title="{{__('conf.videolinktitle')}}" name="url_video" value="{{$conf->url_video}}">
                </div>
                <div class="form-fields">
                    <label for="presentation">{{__('conf.presentation')}}</label>
                    <div>
                        <input type="file" title="{{__('conf.presentationtitle')}}" name='presentation' id="presentation">
                    </div>
                </div>
                <div class="form-fields">
                    <input type="submit" class="custom-button-4" value="{{__('layout.update')}}">
                </div>
            </form>
           </div>
    </div>
</x-app-layout>