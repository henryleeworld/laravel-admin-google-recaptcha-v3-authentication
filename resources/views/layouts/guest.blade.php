<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite(['resources/css/app.css'])
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        @livewireScripts
        <script type="text/javascript">
            function callbackThen(response){
                // read HTTP status
                console.log(response.status);
            
                // read Promise object
                response.json().then(function(data){
                    console.log(data);
                });
            }
            function callbackCatch(error){
                console.error('Error:', error)
            }
        </script>
        {!! htmlScriptTagJsApi([
            'action' => 'dashboard',
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch'
        ]) !!}
    </body>
</html>
