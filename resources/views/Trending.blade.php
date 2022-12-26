@extends('HeaderHome')
@section('container')

<link rel="stylesheet" href="css/trending.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

<div class="container">
    <h1>FILM TERATAS</h1>
    <div class="cards">
        @foreach($films as $film)
        <article class="card">
            <div class="card-img"></div>
            <a href="{{ $film-> slug }}">
                <div class="card-img-hover" style="background-image: url({{ $film->photo }});"></div>
            </a>
            <div class="card-info">
                {{-- <span class="card-category text-truncate">{{ $film-> studios }}</span> --}}
                <h3 class="card-title text-truncate">{{ $film->title }}</h3>
                <div class="card-img-logo" style="background-image: url(images/Logo.png); margin-top: 6px;"></div>
                <h6 class="card-title">{{ $film->rating }}</h6>
            </div>
        </article>
        @endforeach
    </div>

    <!-- --BATAS SLIDER-- -->

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="video-wrapper swiper-wrapper">
                <div class="video swiper-slide">
                    <div class="video-content">
                        <span class="overlay"></span>

                        <div class="video-image">
                            <iframe src="https://www.youtube.com/embed/kwhs6w3eL7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="video-title text-truncate">SPIDER-MAN: INTO THE SPIDER-VERSE - Official Trailer (Sub Indo)</h2>
                    </div>
                </div>

                <div class="video swiper-slide">
                    <div class="video-content">
                        <span class="overlay"></span>

                        <div class="video-image">
                            <iframe src="https://www.youtube.com/embed/mqqft2x_Aa4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="video-title text-truncate">THE BATMAN</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="/js/trending.js"></script>

@include('Footer')
@endsection
