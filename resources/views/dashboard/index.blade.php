@include('HeaderHome')
@section('container')

<!-- Box Icons / CSS -->
<link href="https://getbootstrap.com/docs/5.2/examples/album/" rel="canonical">
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="/css/homepage.css" rel="stylesheet">

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

<main>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-item-center w-25" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{session('success')}}
    </div>
    @endif
    <!-- Carousel -->
    <section class="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Movies/Red.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>One Piece</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Movies/conjuring.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Movies/sangchi.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Section Popular Review  -->
    <section class="popular container" id="popular">
        <!-- Judul -->
        <div class="heading">
            <h2 class="heading-title">Paling Banyak di Review</h2>
            <div class="swiper_btn">
                <div class="swiper-button-prev" id="btn-prev-popular"></div>
                <div class="swiper-button-next" id="btn-next-popular"></div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Isi Film -->
                @foreach($films2 as $film)
                <div class="swiper-slide">
                    <article class="card">
                        <div class="card-img"></div>
                        <a href="{{ $film-> slug }}">
                            <div class="card-img-hover" style="background-image: url(images/movie1.png);"></div>
                        </a>
                        <div class="card-info">
                            {{-- <span class="card-category text-truncate">{{ $film-> studios }}</span> --}}
                            <h3 class="card-title text-truncate">{{ $film->title }}</h3>
                            <div class="card-img-logo" style="background-image: url(images/Logo.png); margin-top: 6px;"></div>
                            <h6 class="card-title">{{$film->rating}}</h6>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <!-- Section Baru Tayang -->
    <section class="barutayang container" id="barutayang">
        <!-- Judul -->
        <div class="heading">
            <h2 class="heading-title">Baru Tayang</h2>
            <div class="swiper_btn mySwiper2">
                <div class="swiper-button-prev" id="btn-prev-barutayang"></div>
                <div class="swiper-button-next" id="btn-next-barutayang"></div>
            </div>
        </div>
        <!-- Swiper -->

        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <!-- Isi Film -->
                @foreach($films as $film)
                <div class="swiper-slide">
                    <article class="card">
                        <div class="card-img"></div>
                        <a href="{{ $film-> slug }}">
                            <div class="card-img-hover" style="background-image: url(images/movie1.png);"></div>
                        </a>
                        <div class="card-info">
                            {{-- <span class="card-category text-truncate">{{ $film-> studios }}</span> --}}
                            <h3 class="card-title text-truncate">{{ $film->title }}</h3>
                            <div class="card-img-logo" style="background-image: url(images/Logo.png); margin-top: 6px;"></div>
                            <h6 class="card-title">{{ $film->rating }}</h6>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination2"></div>
        </div>

    </section>

    <!-- Rekomendasi Film dari User -->
    <section class="jumbotron container" id="jumbotron">
        <div class="kotak p-5 mb-4 mt-5">
            <div class="recommend">
                <h1 class="display-5 fw-bold mb-4">Rekomendasikan film kesukaanmu agar orang lain tau</h1>
                <div class="recom-box">
                    <form action="/Home" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="title" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title">
                            <label for="title">Tulis Film Rekomendasimu</label>
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input class="ml-2" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni  -->
    <section class="testimoni container" id="testimoni">
        <div class="heading">Pendapat Mereka Tentang Filmify</div>
        <div class="wrapper">
            <div class="container">
                <div class="profile">
                    <div class="imgbox">
                        <img src="images/profile.png" alt="">
                    </div>
                    <h2>Person 1</h2>
                </div>
                <p><span class="fa fa-quote-left left"></span>ipsum dolor sit amet consectetur adipisicing elit. Corrupti ratione officiis sapiente,
                    quos consequuntur aliquid. Libero consequatur, quam quasi quos et dolor cumque laudantium
                    aliquam sapiente iusto ut corporis delectus.<span class="fa fa-quote-right right"></span></p>
                <div class="social">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="container">
                <div class="profile">
                    <div class="imgbox">
                        <img src="images/profile.png" alt="">
                    </div>
                    <h2>Person 2</h2>
                </div>
                <p><span class="fa fa-quote-left left"></span>ipsum dolor sit amet consectetur adipisicing elit. Corrupti ratione officiis sapiente,
                    quos consequuntur aliquid. Libero consequatur, quam quasi quos et dolor cumque laudantium
                    aliquam sapiente iusto ut corporis delectus.<span class="fa fa-quote-right right"></span></p>
                <div class="social">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="container">
                <div class="profile">
                    <div class="imgbox">
                        <img src="images/profile.png" alt="">
                    </div>
                    <h2>Person 3</h2>
                </div>
                <p><span class="fa fa-quote-left left"></span>ipsum dolor sit amet consectetur adipisicing elit. Corrupti ratione officiis sapiente,
                    quos consequuntur aliquid. Libero consequatur, quam quasi quos et dolor cumque laudantium
                    aliquam sapiente iusto ut corporis delectus.<span class="fa fa-quote-right right"></span></p>
                <div class="social">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- JS -->
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="/js/home.js"></script>
@include('Footer')
