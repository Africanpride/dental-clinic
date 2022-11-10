<!DOCTYPE html>
<html data-theme="lofi" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link type="image/png" sizes="16x16" rel="icon" href=".../icons8-bookmark-16.png"> --}}
    <link rel="icon" href="{{ asset('/images/favicon/favicon.ico') }}" type="image/gif" sizes="64x64">

    {{-- <link rel="shortcut icon" href="https://www.youtube.com/s/desktop/233efd8f/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.youtube.com/s/desktop/233efd8f/img/favicon_32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.youtube.com/s/desktop/233efd8f/img/favicon_48x48.png" sizes="48x48">
    <link rel="icon" href="https://www.youtube.com/s/desktop/233efd8f/img/favicon_96x96.png" sizes="96x96">
    <link rel="icon" href="https://www.youtube.com/s/desktop/233efd8f/img/favicon_144x144.png" sizes="144x144"> --}}


    <title>{{ config('app.name', 'The Non-Stop Series') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
