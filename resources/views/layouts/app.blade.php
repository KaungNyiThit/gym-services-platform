<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- css (map) --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    
    {{-- js --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="d-flex flex-column" style="min-height: 100vh;">
        <nav class="navbar navbar-expand-md position-sticky  top-0 navbar-light bg-white py-3 shadow-sm"  style="z-index: 1;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Gym') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/trainers') }}">Trainers</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/gym-services')}}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact')}}">Contact Us</a></li>
                        <li class="nav-item " style="font-weight: bolder; "><a class="nav-link" href="{{ url('/membership/checkout')}}">Become Member <i class="fa-solid fa-arrow-right"></i></a></li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                         @else

                            @if (auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/messages"><i class="fa-solid fa-inbox me-3" style="font-size: 1.5rem"></i></a>
                            </li>
                            @endif
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="flex-grow-1"  style=" min-height: px">
            @yield('content')
        </main>

        <div class="footer text-white " style=" background-color: #373738; ">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h3 class="my-3">Contact us</h3>
                        <a class="text-decoration-none text-white" style="font-size: 16px" href="">Message Us</a>
                        <ul class="nav my-3" style="list-style: none; justify-content: center; font-size: 20px">
                            <li class="nav-item me-2"><a href="https://facebook.com/" class="text-white"><i class="fab fa-facebook-square"></a></i></li>
                            <li class="nav-item me-2"><a href="http://t.me/Hogi567" class="text-white"><i class="fa-brands fa-telegram"></a></i></li>
                            <li class="nav-item me-2"><a href="" class="text-white"><i class="fa-brands fa-viber"></a></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center py-3 ">
            <small>&copy; 2024 Kaung Nyi Thit</small>
        </footer>
    </div>
</body>
</html>
