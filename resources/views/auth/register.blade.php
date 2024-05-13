<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .background-image {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('images/book.png');
            /* Adjust the following properties to fit your design */
            background-size: cover;
            background-position: center;
        }

        .dark-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust the opacity here (0.5 for 50% opacity) */
        }

        /* Custom styles */
        .custom-container {
            background-color: #e0e0e0;
            /* Grey background color */
            color: #8b4513;
            /* Brown text color */
        }

        .custom-button {
            background-color: #8b4513;
            /* Brown button color */
            border-color: #8b4513;
            /* Brown button border color */
        }

        .custom-button:hover {
            background-color: #704214;
            /* Darker brown color on hover */
            border-color: #704214;
            /* Darker brown border color on hover */
        }

        .text-brown {
            color: #8b4513;
        }
    </style>

</head>

<body class="background-image">
    <div class="row mt-5">
        <div class=" col-md-6 ">
            <div class="collo d-flex justify-content-center align-items-center h-100 p-5">
                <div class="p-5 bg-light rounded-3  shadow-lg ">
                    <div class="container-fluid py-5 text-center">
                        <h1 class="display-5 fw-bold">Bienvenue</h1>
                        <p class="fs-4 ">blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla </p>
                        <a href="/" class=" btn btn-success shadow">cliquez-ici</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-6">
            <div class="justify-content-end  ">
                <div class="p-5">
                    <div class="card shadow-lg bg-light custom-container text-center ">
                        <div class="card-header ">Inscrivez-vous pour découvrir
                            le moyen le plus efficace dans
                            notre librairie en ligne.</div>

                        <div class="card-body  bg-light custom-container m-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row ">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <a class="btn btn-link text-brown ps-5" href="{{ route('login') }}">
                                        {{ __("j'ai déja un compte !") }}
                                    </a>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __("S'inscrire") }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>