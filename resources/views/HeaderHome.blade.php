<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>{{$title}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

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

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="/css/navbar.css" rel="stylesheet">
</head>

<body>
    <main>
        <nav class="navbarheader1 navbar-expand-lg rounded mb-0" aria-label="navbarheader1">
            <div class="container-fluid  my-2">
                <div class="collapse navbar-collapse justify-content-center" id="navbarheader1">
                    <form class="mt-2" style="width: 22%; margin-left: 5em;" role="search">
                        <input class="form-control" type="search" placeholder="Cari film yang ingin kamu temukan" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg rounded" aria-label="navbarheader2">
            <div class="container-fluid my-0">
                <a class="navbar-brand" href="/Home"><img src="Images/Logo.png" width="100">{{config('app.name')}}</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarheader2" aria-controls="navbarheader2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarheader2">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Trending") ? 'active' : ''}}" href="{{url('/Trending')}}">Trending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Kategori") ? 'active' : ''}}" href="{{url('/Kategori')}}">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Koleksi") ? 'active' : ''}}" href="{{url('/Koleksi')}}">Koleksi</a>
                        </li>
                    </ul>

                </div>

                <div class="">
                    <a href="/Profil" class="d-block link-dark text-decoration-none mr-1">
                        <img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded-circle">
                    </a>
                </div>
            </div>
        </nav>

        @yield('container')
    </main>

    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
