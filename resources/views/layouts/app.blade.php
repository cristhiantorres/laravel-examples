<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="pf-c-page">
        {{-- @includeWhen(!request()->is('login'), 'partials.navbar') --}}
        @include('partials.header')

        @includeWhen(!request()->is('login') && !request()->is('register'), 'partials.sidebar')
        <main role="main" class="pf-c-page__main" tabindex="-1">
            @includeWhen(!request()->is('login') && !request()->is('register'), 'partials.section-title')
            <section class="pf-c-page__main-section">
                <div class="pf-c-content">
                    @yield('content')
                </div>
            </section>
        </main>
    </div>

</body>
</html>
