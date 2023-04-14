<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <h1 class="text-center py-5">
                I vostri fumetti preferiti
            </h1>
        </div>

        <div class="container">
            <div class="row">
                <ul >
                    <li class="text-decoration-none"> 
                        <a href="{{route('comics.index')}}">
                            Negozio fumetti
                        </a>
                    </li>
                    <li class="text-decoration-none">
                        <a href="{{route('comics.create')}}">
                            Cerca un fumetto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

</body>

</html>