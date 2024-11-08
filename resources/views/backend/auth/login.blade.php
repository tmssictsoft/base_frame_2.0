<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">
@php
    $config = configs(['logo', 'app_name']);
 @endphp

<head>
    <meta charset="utf-8" />
    <title>SIGN IN | {{isset($config['app_name']) ? $config['app_name'] : ''}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ assets('backend_assets/images/favicon.icojs') }}">
    <script src="{{ assets('backend_assets/js/layout.js') }}"></script>
    <link href="{{ assets('backend_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ assets('backend_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ assets('backend_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ assets('backend_assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="{{ url('/') }}" class="d-inline-block auth-logo">
                                    <img src="{{ isset($config['logo']) ? $config['logo'] : '' }}" alt="" height="80">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        @if (session('successMessage'))
                            <div class="text-success text-center mb-2"
                                style="background: #ffffff;height: 29px;border-radius: 10px;padding-top: 6px;">
                                <p>{{ session('successMessage') }}</p>
                            </div>
                        @endif
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome To {{isset($config['app_name']) ? $config['app_name'] : ''}} !</h5>
                                    <p class="text-muted">Sign in to continue In Dashboard.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ url('admin') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html" class="text-muted">Forgot
                                                    password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password"
                                                    class="form-control pe-5 password-input"
                                                    placeholder="Enter password" id="password-input">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="submit" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember
                                                me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy
                                {{ date('Y') }} ICT. Developed <i class="mdi mdi-heart text-danger"></i> By
                                TMSS ICT LTD
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ assets('backend_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ assets('backend_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ assets('backend_assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ assets('backend_assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ assets('backend_assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ assets('backend_assets/js/plugins.js') }}"></script>
    <script src="{{ assets('backend_assets/libs/particles.js/particles.js') }}"></script>
    <script src="{{ assets('backend_assets/js/pages/particles.app.js') }}"></script>
    <script src="{{ assets('backend_assets/js/pages/password-addon.init.js') }}"></script>
</body>

</html>
