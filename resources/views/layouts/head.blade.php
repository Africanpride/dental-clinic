<!DOCTYPE html>
<html data-theme="lofi" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link type="image/png" sizes="16x16" rel="icon" href=".../icons8-bookmark-16.png"> --}}
    <link rel="icon" href="{{ asset('/images/favicon/favicon.ico') }}" type="image/gif" sizes="64x64">

    <title>{{ config('app.name', 'The Non-Stop Series') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ asset('/build/assets/app.54234ff0.css') }}">
    <script type="module" src="{{ asset('/build/assets/app.d426e523.js') }}"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    {{-- @php
        $manifest = json_decode(file_get_contents('../public/build/manifest.json'), true);
    @endphp
    <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
    <link rel="stylesheet" href="/build/{$manifest['resources/js/app.js']['css'][0]}"> --}}

    @livewireStyles

</head>
