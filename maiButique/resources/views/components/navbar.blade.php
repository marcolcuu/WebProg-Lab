<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-light p-3">
        <div class="p-0 container-fluid">
            <a class="navbar-brand ms-2 text-decoration-none" href="{{ url('/') }}">
                MAIBOUTIQUE
            </a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium" id="active" aria-current="page"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium" href="{{ url('reservation') }}">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium" href="{{ url('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium" href="{{ url('store') }}">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium" href="{{ url('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium" href="{{ url('forum') }}">Forum</a>
                </li>
            </ul>
            <div class="d-grid gap-2 d-md-block">
                @if (Auth::user() != null)
                    <div class="logout d-flex  align-items-center ">
                        @auth
                            <a href="{{ url('profile') }}" style="text-decoration: none; color: black">
                                <p class="mt-3 me-4">
                                    Welcome, {{ Auth::user()->name }}
                                </p>
                            </a>
                        @endauth
                    </div>
                @else
                    <a href="{{ url('login') }}" class="text-decoration-none">
                        <button id="log" class="btn btn btn-primary fw-medium" type="button">Log in</button>
                    </a>
                    <a href="{{ url('register') }}" class="text-decoration-none">
                        <button id="sign" class="btn btn btn-primary fw-medium" type="button">Sign up</button>
                    </a>
                @endif
            </div>
        </div>
    </nav>
</body>

</html>
