<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="content-language" content="{{ implode(', ', config('app.allowed_locales')) }}" />
    <meta name="description" content="{{ __('front.app.description') }}">

    <title>Laravel - {{ __('front.app.title') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    @foreach (config('app.allowed_locales') as $locale)
        <link rel="alternate" href="{{ route('front.index', ['locale' => $locale]) }}"
            hreflang="{{ $locale }}" />
    @endforeach

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            text-align: center;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <header>
        <div class="container d-flex align-items-center py-2">
            <div class="d-flex align-items-center">
                <h1 class="h5 mb-0">{{ config('app.name') }}</h1>
                <nav class="nav ml-2">
                    <a class="nav-link"
                        href="{{ route('front.index', ['locale' => app()->getLocale()]) }}">{{ __('front.nav.index') }}</a>
                    <a class="nav-link"
                        href="{{ route('front.contact', ['locale' => app()->getLocale()]) }}">{{ __('front.nav.contact') }}</a>
                    <a class="nav-link"
                        href="{{ route('front.about', ['locale' => app()->getLocale()]) }}">{{ __('front.nav.about') }}</a>
                </nav>
            </div>
            <ul class="nav justify-content-end ml-auto">
                <a class="nav-link disabled">Idiomas:</a>
                @foreach (config('app.allowed_locales') as $lang)
                    <a class="nav-link {{ app()->getLocale() === $lang ? 'disabled' : null }}"
                        href="{{ route('front.index', ['locale' => $lang]) }}">{{ Str::upper($lang) }}</a>
                @endforeach
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
