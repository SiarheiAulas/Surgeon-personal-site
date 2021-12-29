<!DOCTYPE html>
@if(session('locale'))
    <html lang="{{session('locale')}}">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="author", content="Siarhei Aulas">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            
            <!--Favicon-->
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon/favicon.ico')}}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon_16x16.png')}}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon_32x32.png')}}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicon/favicon_96x96.png')}}">
            <link rel="icon" type="image/png" sizes="120x120" href="{{asset('img/favicon/favicon_120x120.png')}}">
            <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/favicon/favicon_192x192.png')}}">
            <link sizes="72x72" rel="apple-touch-icon" href="{{asset('img/favicon/favicon_72x72.png')}}">
            <link sizes="144x144" rel="apple-touch-icon" href="{{asset('img/favicon/favicon_144x144.png')}}">
            <link sizes="180x180" rel="apple-touch-icon" href="{{asset('img/favicon/favicon_180x180.png')}}">
            
            <title>{{ config('app.name') }}
                @include('locale')
            </title>
            
            <meta name="theme-color" content="#daf6f7">
    
            {{--Bootstrap не нужен
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
             --}}
            
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
            
            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    
            {{-- Пока не используется
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            --}}
            
            <!--WYSIWYG-->
            <script src="https://cdn.tiny.cloud/1/esssxnna3kappnbe3yac5ejvd7ffu2jswun5lfq7mupla1ba/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            
        </head>
        <body>
            <!-- Page Content -->
            <div class="lang">
                {{__('layout.lang')}}
                |<a href="{{route('setlocale',['locale'=>'en'])}}" target="_self">ENG</a>|
                <a href="{{route('setlocale',['locale'=>'ru'])}}" target="_self">RU</a>|
            </div>
            <x-header/>
            <div class="content-centered">
                <x-aside/>
                <main>
                    {{ $slot }}
                </main>
            </div>
            <x-footer/>
        </body>
    </html>
