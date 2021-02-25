<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    @include('_partials.yandex-metrika')
</head>
<body class="antialiased bg-indigo-100 font-sans min-h-screen flex flex-col">

@include('_partials.navbar')

@yield('content')

@include('_partials.footer')

</body>
</html>
