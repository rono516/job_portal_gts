<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <!-- our CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/line-icons/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="app">

        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="{{ url('/') }}">GTS Jobs</a></div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                            <li><a href="{{ url('/about_us') }}">About</a></li>


                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li class="d-lg-none"><a href="{{ url('/post_job') }}"><span
                                        class="mr-2 btn btn-primary border-width-2 d-none d-lg-inline-block icon-lock_outline ">+</span>
                                    {{-- class="mr-2 icon-lock_outline" --}}
                                    Post a Job</a>
                            </li>

                            @guest
                                @if (Route::has('login'))
                                    <li class=""><a href="{{ route('login') }}">Log In</a></li>
                                @endif
                                @if (Route::has('register'))
                                    <li class=""><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @else
                                <li>
                                    <a href="{{ url('/profile') }}" class="">{{ Auth::user()->name }}'s' Profile</a>
                                </li>
                                <li class=""><a href="{{ route('logout') }}">Logout</a></li>
                            @endguest

                        </ul>
                    </nav>

                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        @auth
                            @if (DB::table('users')->where('id', '=', Auth::user()->id)->pluck('is_admin')->first() == 1)
                                <div class="ml-auto">
                                    <a href="{{ url('/post_job') }}"
                                        class="btn btn-outline-white border-width-2 d-none d-lg-inline-block">Post a
                                        Job<span class="mr-2 icon-add"></span></a>

                                </div>
                            @endif

                        @endauth
                        <a href="#"
                            class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>

                </div>
            </div>
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- our JS files -->
    <!-- SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/stickyfill.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
