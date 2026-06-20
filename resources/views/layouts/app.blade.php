<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="{{ asset('/css/app.css') }}"
          rel="stylesheet" />

    <title>@yield('title', 'Online Store')</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">

        <div class="container">

            <div class="navbar-nav ms-auto">

                <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
                <a class="nav-link active" href="{{ route('home.about') }}">About</a>

                <div class="vr bg-white mx-2 d-none d-lg-block"></div>

                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                @else

                    <a class="nav-link active" href="{{ route('myaccount.orders') }}">
                        My Orders
                    </a>

                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link active">
                            Logout
                        </button>
                    </form>

                @endguest

            </div>

        </div>

    </nav>

    <!-- Subtitle -->
    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container">
            <h2>@yield('subtitle')</h2>
        </div>
    </header>

    <!-- Content -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="copyright py-4 text-center text-white bg-dark">

        <div class="container">

            <small>
                Copyright -

                <a class="text-reset fw-bold text-decoration-none"
                   target="_blank"
                   href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>

                - <b>Paola Vallejo</b>
            </small>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>