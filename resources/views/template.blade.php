@php
    use Illuminate\Support\Facades\Session;
    $user = Session::get('user');
    $isAuthorize = true;
    if ($user == null) $isAuthorize = false;
@endphp

    <!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Fucking shop | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <script src="{{asset('vendor/bootstrap/js/jquery-3.6.0.js')}}" rel="stylesheet"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}" rel="stylesheet"></script>
    <link href="{{asset('vendor/bootstrap/js/navbar.css')}}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">Fucking shop</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02"
                    aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/1" ? "active" : "");
                        ?>" href="/productsByCategory/1">iPhone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/2" ? "active" : "");
                        ?>" href="/productsByCategory/2">iPad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/3" ? "active" : "");
                        ?>" href="/productsByCategory/3">iPod</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/4" ? "active" : "");
                        ?>" href="/productsByCategory/4">Mac</a>
                    </li>
                </ul>
                <div class="d-flex w-100 justify-content-start mx-2">
                    <form class="">
                        <input class="form-control bg-dark text-light " type="text" placeholder="Search"
                               aria-label="Search">
                    </form>
                </div>
                <div class="d-flex w-100 justify-content-end mx-2">
                    @if($isAuthorize)
                        <div class="dropstart ps-1 mx-3">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{$user->name}}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Personal</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="/users/logout">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="/users/signin" class="badge mx-3">
                            <button class="btn btn-secondary">Sign in</button>
                        </a>
                    @endif

                    <a class="position-relative pe-2 my-2" href="">
                        <img class="" src="{{asset('images/icons/basket.svg')}}">
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">10<span
                                class="visually-hidden">unread messages</span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>
</header>

<main>

    {{--    <section class="py-5 text-center container">--}}
    {{--        <div class="row py-lg-5">--}}
    {{--            <div class="col-lg-6 col-md-8 mx-auto">--}}
    {{--                <h1 class="fw-light">Album example</h1>--}}
    {{--                <p class="lead text-muted">Something short and leading about the collection below—its contents, the--}}
    {{--                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it--}}
    {{--                    entirely.</p>--}}
    {{--                <p>--}}
    {{--                    <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
    {{--                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <div class="album py-5 bg-light min-vh-100">
        <div class="container">

            @yield('content')

        </div>
    </div>

</main>

<footer class="card-footer">
    <div class="container">
        <p class="float-end">
            <a class="link-dark" href="#">Back to top</a>
        </p>
        <p class="text-secondary">2021 &copy; RMG</p>

    </div>
</footer>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
