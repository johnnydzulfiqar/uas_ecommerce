
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Login E-Commerce Unikom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v4.2.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('layout/assets/images/favicon.ico') }}" />
        <!-- Css -->
        <link href="{{ asset('layout/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('layout/assets/css/bootstrap.min.css')}}" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('layout/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('layout/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('layout/assets/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Hero Start -->
        <section class="bg-home bg-circle-gradiant d-flex align-items-center">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card form-signin p-4 rounded shadow">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <a href="index.html"><img src="{{ asset('layout/assets/images/logo-icon.png') }}" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                                <h5 class="mb-3 text-center">{{ __('Login') }}</h5>
                            
                                <div class="form-floating mb-2">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="floatingInput">{{ __('Email Address') }}</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" required autocomplete="current-password">
                                    <label for="password">{{ __('Password') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            
                                <div class="d-flex justify-content-between">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckDefault">  {{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                </div>
                
                                <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                                <div class="col-12 text-center mt-3">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="/register" class="text-dark fw-bold">Sign Up</a></p>
                                </div><!--end col-->

                                <p class="mb-0 text-muted mt-3 text-center">© <script>document.write(new Date().getFullYear())</script> Landrick.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('layout/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('layoutassets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('layout/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('layout/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('layout/assets/js/app.js') }}"></script>
        
    </body>

</html>