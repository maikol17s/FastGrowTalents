<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="icon" href="{{ asset('/img/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>@yield('title', 'FastGrow Talents')</title>
</head>

<body>
    <div class="home">
        <nav class="navbar">
            <a href="{{ url('/dashboard') }}" class="logo-link">
                <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
            </a>
            <ul class="nav-list">
                @auth
                    @if (Auth::user()->role && Auth::user()->role->role_name == 'Administrator')
                        <div></div>
                    @else
                        <li class="nav-item"><a href="{{ url('dashboard') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ url('/about-us') }}" class="nav-link">About us</a></li>
                        <div>
                            <livewire:navigation-menu />
                        </div>
                    @endif
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif

                    <li class="nav-item"><a href="{{ url('/about-us') }}" class="nav-link">About us</a></li>
                @endauth
            </ul>
        </nav>
        <footer class="site-footer">
            <div class="footer-content">
                <div class="footer-buttons">
                    <a href="https://www.facebook.com/profile.php?id=61551204187443&mibextid=ZbWKwL" class="social-link"
                        target="_blank">
                        <img class="social-icon button-1" src="{{ asset('img/facebook.png') }}">
                    </a>
                    <a href="https://instagram.com/fastgrow_talents?igshid=OGQ5ZDc2ODk2ZA==" class="social-link"
                        target="_blank">
                        <img class="social-icon" src="{{ asset('img/instagram.png') }}">
                    </a>
                    <a href="" class="social-link" target="_blank">
                        <img class="social-icon" src="{{ asset('img/correo.png') }}">
                    </a>
                </div>
                <div class="footer-line"></div>
                <div class="footer-copyright">
                    @if (Auth::check() && Auth::user()->role && Auth::user()->role->role_name == 'Administrator')
                        PANEL DE ADMINISTRADOR, TODOS LOS DERECHOS RESERVADOS © 2024
                    @else
                        FGROW TALENTS | VALE | MAIK | RONI  © 2024
                    @endif
                </div>
            </div>
        </footer>
    </div>

    @livewireScripts

    @yield('content')
</body>

</html>
