@extends('HeaderHome')
@section('container')

<link href="https://getbootstrap.com/docs/5.2/examples/album/" rel="canonical">
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="/css/moviepage.css" rel="stylesheet">


<main>
    <!-- Section Trailer -->
    <section class="movie-banner">
        <!-- Img -->
        <div class="m-banner-img">
            <img src="{{$films->photo}}" alt="">
        </div>

        <!-- Content -->
        <div class="banner-container">
            <!-- Title -->
            <div class="title-container">
                <!-- Top -->
                <div class="title-top">
                    <div class="movie-title">
                        <h1>{{$films->title}}</h1>
                    </div>

                    <div class="rating">
                        {{$films->rating}} <img class="logo-icon" src="/images/Logo.png" alt="">
                    </div>

                    <div class="more-about-movie">
                        <span>{{$films->studio}}</span>
                        <span>{{$films->rilis}}</span>
                    </div>

                    <div class="category">
                        <a href="/Kategori/{{$kategori->slug}}" class="category-link">{{$kategori->title}}</a>
                    </div>
                </div>

                <div class="title-bot">
                    <a href="https://www.youtube.com/watch?v=g4Hbz2jLxvQ" class="watch-btn">Watch Trailer</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Details -->
    <section class="movie-details">
        <strong>{{$films->title}}</strong>
        <p>{{$films->body}}</p>

        <div class="comment-area mt-4">
            @if(session('message'))
            <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
            @endif

            <div class="card card-body">
                <h2 class="card-title"></h2>
                <form action="{{ url('review')}}" method="post">
                    @csrf
                    <input type="hidden" name="movies_slug" value="{{ $films->slug }}">
                    <textarea name="body" class="form-control text-muted" rows="3" placeholder="tulis komentarmu disini" required></textarea>
                    <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                </form>
            </div>

            @forelse($films->review as $review)
            <div class="card card-body shadow-sm mt-3">
                <div class="detail-area">
                    <h2 class="user-name mb-1">
                        @if($review->user)
                        {{ $review->user->username }}
                        @endif
                        <small class="ms-3 text-primary">{{$review->created_at}}</small>

                    </h2>

                    <p class="user-comment mb-1">
                        {!! $review->body !!}
                    </p>
                </div>
            </div>
            @empty
            <h6>Belum ada review</h6>
            @endforelse

        </div>
    </section>

</main>

@include('Footer')
@endsection
