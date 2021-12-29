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
            <form action="{{route('bios.update', ['bio'=>$bio])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-fields">
                    <label for="photo">{{__('bio.photolink')}}</label>
                    <input id="photo" type="file" title="{{__('bio.phototitle')}}" name="photo">
                </div>
                <div class="form-fields">
                    <label for="ru_univer">{{__('bio.ruuniversity')}}</label>
                    <textarea id="ru_univer" class="form-input textarea-general" title="{{__('bio.ruuniversitytitle')}}" name="ru_univer">{{$bio->ru_univer}}</textarea>
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
                    <label for="en_univer">{{__('bio.enuniversity')}}</label>
                    <textarea id="en_univer" class="form-input textarea-general" title="{{__('bio.enuniversitytitle')}}" name="en_univer">{{$bio->en_univer}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_intern">{{__('bio.ruintern')}}</label>
                    <textarea id="ru_intern" class="form-input textarea-general" title="{{__('bio.ruinterntitle')}}" name="ru_intern">{{$bio->ru_intern}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_intern">{{__('bio.enintern')}}</label>
                    <textarea id="en_intern" class="form-input textarea-general" title="{{__('bio.eninterntitle')}}" name="en_intern">{{$bio->en_intern}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_aspirant">{{__('bio.rupostgraduate')}}</label>
                    <textarea id="ru_aspirant" class="form-input textarea-general" title="{{__('bio.rupostgraduatetitle')}}" name="ru_aspirant">{{$bio->ru_aspirant}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_aspirant">{{__('bio.enpostgraduate')}}</label>
                    <textarea id="en_aspirant" class="form-input textarea-general" title="{{__('bio.enpostgraduatetitle')}}" name="en_aspirant">{{$bio->en_aspirant}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_departments">{{__('bio.ruexperience')}}</label>
                    <textarea id="ru_departments" class="form-input textarea-general" title="{{__('bio.ruexperiencetitle')}}" name="ru_departments">{{$bio->ru_departments}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_departments">{{__('bio.enexperience')}}</label>
                    <textarea id="en_departments" class="form-input textarea-general" title="{{__('bio.enexperiencetitle')}}" name="en_departments">{{$bio->en_departments}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_courses">{{__('bio.rucourses')}}</label>
                    <textarea id="ru_courses" class="form-input textarea-general" title="{{__('bio.rucoursestitle')}}" name="ru_courses">{{$bio->ru_courses}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_courses">{{__('bio.encourses')}}</label>
                    <textarea id="en_courses" class="form-input textarea-general" title="{{__('bio.encoursestitle')}}" name="en_courses">{{$bio->en_courses}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_practic_interes">{{__('bio.rupractic')}}</label>
                    <textarea id="ru_practic_interes" class="form-input textarea-general" title="{{__('bio.rupractictitle')}}" name="ru_practic_interes">{{$bio->ru_practic_interes}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_practic_interes">{{__('bio.enpractic')}}</label>
                    <textarea id="en_practic_interes" class="form-input textarea-general" title="{{__('bio.enpractictitle')}}" name="en_practic_interes">{{$bio->en_practic_interes}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_research_interes">{{__('bio.ruscientific')}}</label>
                    <textarea id="ru_research_interes" class="form-input textarea-general" title="{{__('bio.ruscientifictitle')}}" name="ru_research_interes">{{$bio->ru_research_interes}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_research_interes">{{__('bio.enscientific')}}</label>
                    <textarea id="en_research_interes" class="form-input textarea-general" title="{{__('bio.enscientifictitle')}}" name="en_research_interes">{{$bio->en_research_interes}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="ru_society">{{__('bio.rusociety')}}</label>
                    <textarea id="ru_society" class="form-input textarea-general" title="{{__('bio.rusocietytitle')}}" name="ru_society">{{$bio->ru_society}}</textarea>
                </div>
                <div class="form-fields">
                    <label for="en_society">{{__('bio.ensociety')}}</label>
                    <textarea id="en_society" class="form-input textarea-general" title="{{__('bio.ensocietytitle')}}" name="en_society">{{$bio->en_society}}</textarea>
                </div>
                <div class="form-fields">
                    <input type="submit" class="custom-button-4" value="{{__('bio.add')}}">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>