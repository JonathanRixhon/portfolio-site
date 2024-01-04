<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <title>{{ $page->getTitle() }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @foreach ($page->getMetas() as $property => $content)
        <meta property="{!! $property !!}" content="{!! $content !!}">
    @endforeach

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ Vite::asset('resources/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ Vite::asset('resources/favicon/safari-pinned-tab.svg') }}" color="#8bb3df">
    <meta name="msapplication-TileColor" content="#8bb3df">
    <meta name="theme-color" content="#8bb3df">
    <!-- ASSETS -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @cookieconsentscripts
</head>

<body class="layout">
    <x-header :$page />

    <main class="{{ $page->route }}">
        @yield('content')
        <x-modal toggle="contact-form">
            <x-contact-form :contact="$contact->content['form']" modifier="contact-form--modal" />
        </x-modal>
    </main>

    <x-gradient-effect />
    @session('flash')
        <x-flash title="{{ session('flash')['title'] }}">
            {{ session('flash')['message'] }}
        </x-flash>
    @endsession
    <x-footer />
    @cookieconsentview
</body>

</html>
