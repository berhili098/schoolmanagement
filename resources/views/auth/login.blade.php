<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>School manager</title>

    <meta name="description"
        content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    {{-- @vite(['resources/sass/main.scss', 'resources/sass/dashmix/themes/xwork.scss', 'resources/js/dashmix/app.js']) --}}
    @yield('js')
</head>

<body>
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('assets/media/photos/photo22@2x.jpg');">
                <div class="row g-0 bg-primary-op">
                    <!-- Main Section -->
                    <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                        <div class="p-3 w-100">
                            <!-- Header -->
                            <div class="mb-3 text-center">
                                <a class="link-fx fw-bold fs-1" href="#">
                                    <span class="text-dark">School</span><span class="text-primary">Manager</span>
                                </a>
                                <p class="text-uppercase fw-bold fs-sm text-muted">Se connecter</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <div class="row g-0 justify-content-center">
                                <div class="col-sm-8 col-xl-6">
                                    <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="py-3">
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert" style="display: block">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <div class="mb-4">
                                                
                                                <input id="email" type="email"
                                                    class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror "
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" placeholder="Email">
                                            </div>
                                            @error('password')
                                                    <span class="invalid-feedback" role="alert" style="display: block">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <div class="mb-4">
                                                
                                                <input
                                                    class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                                    id="password" name="password" type="password" placeholder="Password">

                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                                <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> {{ __('Se connecter') }}
                                            </button>
                                            {{-- <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                                <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                    href="op_auth_reminder.html">
                                                    <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot
                                                    password
                                                </a>
                                                <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                                    href="/register">
                                                    <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                                </a>
                                            </p> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                    <!-- END Main Section -->

                    <!-- Meta Info Section -->
                    <div
                        class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                        <div class="p-3">
                            <p class="display-4 fw-bold text-white mb-3">
                                Bonjour dans le future
                            </p>
                            <p class="fs-lg fw-semibold text-white-75 mb-0">
                                Copyright &copy; <span data-toggle="year-copy"></span>
                            </p>
                        </div>
                    </div>
                    <!-- END Meta Info Section -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS
    
      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/dashmix.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signin.min.js"></script>
</body>

</html>







{{-- @extends('layouts.app')
{{-- @extends('layouts.backend') --}}
{{-- @section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
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

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
