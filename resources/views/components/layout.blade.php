<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">


    <title>{{ $title ?? 'Rapido.es'  }}</title>

    @livewireStyles
    @vite(['resources/css/app.css'])
    {{ $style ?? '' }}

</head>
<body>
    <x-navbar/>
    @if (session()->has('message'))
    <x-alert :type="session('message')['type']" :message="session('message')['text']"/>
    @endif
    {{ $slot }}


    <x-footer/>
    @livewireScripts
    @vite (['resources/js/app.js'])
    {{ $script ?? '' }}


</body>
</html>