
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Register E-Commerce Unikom</title>
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
        <link href="{{ asset('layout/assets/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <a href="index.html"><img src="{{ asset('layout/assets/images/logo-icon.png') }}" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                                <h5 class="mb-3 text-center">{{ __('Register') }}</h5>
                            
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="floatingInput">{{ __('Name') }}</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label for="floatingEmail">{{ __('Email Address') }}</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <label for="floatingPassword">{{ __('Password') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    
                                    <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                                    <label for="floatingPassword">{{ __('Confirm Password') }}</label>
                                </div>
        
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                </div>
                
                                <button class="btn btn-primary w-100" type="submit">{{ __('Register') }}</button>

                                <div class="col-12 text-center mt-3">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="/login" class="text-dark fw-bold">Sign in</a></p>
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
        <script src="{{ asset('layout/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('layout/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('layout/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('layoutassets/js/app.js') }}"></script>
        
    </body>

</html>