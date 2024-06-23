<!doctype html>
<html lang="en">

<head>
    <title>Hokers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--Icon page-->
    <link rel="icon" href="{{ asset('Logo_Hokers.png') }}" type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start mt-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0 d-none d-md-block" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Hokers <br />
                        <span style="color: hsl(218, 81%, 75%)">Lo mejor para ti</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Colombia es un país de berraquera y de maravillas gastronómicas, <br>
                        con nuestra creación queremos que todos, tanto compatriotas <br>
                        como extranjeros, descubran el potencial de esta nación.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 pb-5 px-md-5">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <img src="{{ asset('Logo_Hokers.png') }}" alt="logo hokers" class="logo">
                                <h2 class="fw-bold mb-3 text-uppercase text-center">Actualizar contraseña</h2>
                                <input type="hidden" name="token" value="{{ $token }}">

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                    <input type="email" id="email"
                                        class="form-control  @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="password">{{ __('Password') }}</label>
                                    <input type="password" id="password"
                                        class="form-control  @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Password confirmation input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label"
                                        for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input type="password" id="password-confirm" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <!-- Submit button -->
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4">
                                        {{ __('Reset Password') }}
                                    </button>

                                    <!-- 2 column grid layout for inline styling -->
                                    <!-- Return to login link -->
                                    <div class="row mb-4">
                                        <div class="col ">
                                            <a href="{{ route('login') }}">Ir al inicio de sesión</a>
                                        </div>

                                        <div class="col">
                                            <!-- Return to register link -->
                                            <a href="{{ route('register') }}">Ir al registro</a>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
