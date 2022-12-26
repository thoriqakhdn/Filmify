<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>{{$title}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">





    <link href="{{asset('front/css/bootstrap.min.css')}}" rel=" stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


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
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>
    <div class="row justify-content-center">
        @if(session()->has('success'))<div class="alert alert-success alert-dismissible fade show d-flex justify-content-center w-25" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            @endif
            @if(session()->has('loginError'))<div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center w-25 mt-0" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
                @endif
            </div>
            <section class="top">
                <main class="form-signin">
                    <form action="/login" method="post">
                        @csrf
                        <a href="/">
                            <img class="img mb-5" src="/images/Logo.png" alt="" width="80" height="60"></a>Filmify
                        <h1 class="h3 ml-5 mb-4 fw-normal">Masuk</h1>
                        <p>Belum punya akun Filmify? <a style="float:right" href='/register'>Daftar akun baru</a>
                        </p>
                        <div class="form-floating">
                            <input type="username" name="username" class="form-control @error('username') is-invalid
                    @enderror" id="username" placeholder="Username" autofocus required value="{{old('username')}}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedbacks" {{$message}} </div>
                                @enderror
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    <label for="paswsword" required>Password</label>
                                </div>

                                <input class="ml-2 mb-5" type="submit" value="Masuk">
                                <p class=" mb-3 text-muted">&copy; © 2022 Filmify. All rights reserved. Filmify is a
                                    registered
                                    trademark of Telkom University Group, LLC.
                                </p>
                    </form>
                </main>
                <div class="kolom-kanan">
                    <img class="mt-5" src="images/1.png" width="780" height="600" </div>
                    <p><a>Filmify adalah website pecinta film terbesar di Indonesia.</a> Kamu bisa mendapatkan berbagai
                        macam pendapat dari berbagai reviewers disini.</p>
                </div>
            </section>
</body>
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>
