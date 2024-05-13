<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-book</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="antialiased">


    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light d-flex justify-content-between shadow-sm px-5 pt-3">
        <div>
            <span class="navbar-brand mb-2 h1">LOGO</span>
        </div>
        <div>
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ url('/home') }}" class="btn btn-success font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Accueil</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-dark font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se connecter</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'inscrire</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>
    <div>
        <div class="p-5 bg-light rounded-3 ">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-5 fw-bold">Bienvenue</h1>
                <p class="fs-4 ">text blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla </p>
            </div>
        </div>
        <div class=" mb-4 bg-white rounded-3 ">
            <div class="container-fluid text-center py-4">
                <h3 class="display-6 fw-bold">Recommendations</h3>
                <div class="row">
                    @foreach($books as $book)
                    <div class="col-md-3 m-3">
                        <div class="card" style="width: 18rem;">
                            <img src="/images/book.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$book->name}}</h5>
                                <p class="card-text">descreption</p>
                                <a href="/home" type="button" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg> Télécharger</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>

</html>