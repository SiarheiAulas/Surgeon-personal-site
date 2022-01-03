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
        @if(session('message'))
            <div class="contain-message">
                {{session('message')}}
            </div>
        @endif    
        <div class="main-text">
            <div>
                <p>{{__('feedback.message')}}</p>
                <p>{{__('feedback.contactnumber')}}</p>
            </div>
            <div>
                <div class="contact-panel width-600px" id="feedback-contact-panel">
                    <ul class="contact-panel-list">
                        <li class="contct-panel-item"><a href="viber://chat?number=%2B375291238621"><img src="{{asset('/public/img/viber.svg')}}" alt="viber"></a></li>
                        <li class="contct-panel-item"><a href="https://telegram.me/Aulas_Siarhei"><img src="{{asset('/public/img/telegram.svg')}}" alt="telegram"></a></li>
                        <li class="contct-panel-item"><a href="mailto:avlassergey@list.ru"><img src="{{asset('/public/img/email.svg')}}" alt="email"></a></li>
                        <li class="contct-panel-item"><a href="https://vk.com/id184957680"><img src="{{asset('/public/img/vk.svg')}}" alt="vkontakte"></a></li>
                        <li class="contct-panel-item"><a href="https://www.facebook.com/siarhei.aulas.7"><img src="{{asset('/public/img/facebook.svg')}}" alt="facebook"></a></li>
                    </ul>
                </div>
            </div>
            <form action="{{route('email')}}" method="post">
                @csrf
                <div class="form-fields">
                    <label for="header">{{__('feedback.subject')}}</label>
                    <input type="text" class="form-input" title="{{__('feedback.subjecttitle')}}" id="header" name="header" value="{{old('header')}}">
                </div>
                <div class="form-fields">
                    <label for="email">{{__('feedback.email')}}</label>
                    <input type="email" class="form-input" title="{{__('feedback.emailtitle')}}" id="email" name="email" value="{{old('email')}}">
                    <small class="helper-text">{{__('feedback.emailhelper')}}</small>
                </div>
                <div class="form-fields">
                    <label for="sender">{{__('feedback.name')}}</label>
                    <input type="text" class="form-input" title="{{__('feedback.nametitle')}}" id="sender" name="sender"  value="{{old('sender')}}">
                    <small class="helper-text">{{__('feedback.namehelper')}}</small>
                </div>
                <div class="form-fields">
                    <label for="text">{{__('feedback.text')}}</label>
                    <textarea id="text" class="form-input textarea-general" title="{{__('feedback.texttitle')}}" name="text">{{old('text')}}</textarea>
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
                    <input type="submit"  class="custom-button-4" value="{{__('feedback.send')}}">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>