<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <title>{{ $page->getTitle() }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- @foreach (Page::metas() as $property => $content)
        <meta property="{!! $property !!}" content="{!! $content !!}">
    @endforeach --}}

    <!-- FAVICON -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> --}}
    <!-- ASSETS -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;600;700&family=Roboto+Mono&display=swap"
        rel="stylesheet">
</head>

<body class="layout">
    <x-header :$page />

    <main class="main">
        @yield('content')
    </main>

    {{-- <x-footer /> --}}
    <x-gradient-effect />
</body>
</html>
