
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MayDay</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('website') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('website') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('website') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('website') }}/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Bikin - v2.2.1
    * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.html">MayDay</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @guest
                    <li>  <a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))

                        <li>  <a href="{{ route('register') }}">{{ __('Register') }}</a></li>

                    @endif





                @else

                    <li class="drop-down"><a href="">{{ Auth::user()->name }}  </a>
                        <ul>
                            @if (Route::has('login'))
                                @auth

                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                @endauth
                        </ul>
                    </li>

                @endif


                        @endguest


                <li><a href="{{ url('/') }}">home</a></li>

            </ul>
        </nav><!-- .nav-menu -->


    </div>
</header><!-- End Header -->

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>


</html>
