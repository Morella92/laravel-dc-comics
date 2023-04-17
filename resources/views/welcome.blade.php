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

<body class="bg-warning bg-gradient">

    <main>
        <div class="container">
            <h1 class="text-center py-5 fs-bold text-uppercase">
                I vostri fumetti preferiti
            </h1>
        </div>

        <div class="container">
            <div class="row">
                <ul class="fs-5 d-flex justify-content-around">
                    <li> 
                        <a href="{{route('comics.index')}}">
                            Negozio fumetti
                        </a>
                    </li>
                    <li>
                        <a href="{{route('comics.create')}}">
                            Aggiungi un fumetto
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-center py-3">
            <img class="main-img rounded-circle" src="/marvel-fresh-start.jpg" alt="">
        </div>
    </main>

</body>

</html>