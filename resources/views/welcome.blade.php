<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            text-align: center;
            min-height: 100vh;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">
    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <ul class="nav justify-content-end">
                        <a class="nav-link disabled">Idiomas:</a>
                        @foreach (['en', 'pt-BR'] as $lang)
                            <a class="nav-link" href="#">{{ Str::upper($lang) }}</a>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body px-5">
                    <h1>{{ __('Olá Mundo, Bem Vindo!') }}</h1>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
