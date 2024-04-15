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
            background-image: url('images/book.png');
            /* Adjust the following properties to fit your design */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
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
    <div class="dark-overlay"></div>
    <div class="row">
        <div class="container">
            <div class="collo justify-content-start  text-white ">
                <p>test test test test test</p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end  ">
                <div class="col-md-5 m-5 ">
                    <div class="card shadow bg-light custom-container text-center ">
                        <div class="card-header ">{{ __('Connectez-vous pour découvrir 
le moyenle plus efficace dans 
notre librairie en ligne.') }}</div>

                        <div class="card-body  bg-light custom-container m-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3  mt-5">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 ">
                                    <div class="col-md-6 offset-md-3">

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link text-brown" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublie ?') }}
                                        </a>
                                        @endif

                                    </div>
                                </div>


                                <div class="row my-2 mx-auto d-flex justify-content-center">
                                    <button type="submit" class="col-md-4 btn btn-primary custom-button">
                                        {{ __('Login') }}
                                    </button>

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