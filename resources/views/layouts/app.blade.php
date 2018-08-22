<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LSAPP') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="{{ mix('js/app.js') }}" ></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('include.navbar')
        <main class="py-4 container">
            @include('include.messages')
            @yield('content')
        </main>
    </div>
    <script src="{!! mix('js/app.js') !!}"> </script>
    <script src="/js/ckeditor5-build-classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#ckeditor-text' ))
        .then( editor => {
            editor.autoParagraph = false;
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
    </script>
</body>
</html>
