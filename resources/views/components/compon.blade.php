<!doctype html>
<html>
    <head></head>
    <body>
        @component('components.alert')
            @slot('title')
                Welcome laravel
            @endslot
            @slot('content')
                Laravel is very awesome!!!
            @endslot
            @slot('button')
                Click me
            @endslot
        @endcomponent
        @component('components.alert')
            @slot('title')
                Welcome laravel not button
            @endslot
            @slot('content')
                Laravel is very awesome!!!
            @endslot
        @endcomponent
    </body>
</html>