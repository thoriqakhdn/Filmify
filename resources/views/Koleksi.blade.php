@extends('HeaderHome')
@section('container')

<link rel="stylesheet" href="css/profile.css">
<div class="container">
    <div class="profile">
        <img src="images/profile.png" class="profile-pic">
        <h1> Adam Levine </h1>
        <a href="#" class="follow-btn">Follow</a>

        <div class="asd">
            <div>
                <h2>3</h2>
                <p>Unggah</p>
            </div>
            <div>
                <h2>500.1K</h2>
                <p>Pengikut</p>
            </div>
            <div>
                <h2>1.2M</h2>
                <p>Suka</p>
            </div>
        </div>
    </div>
</div>

<section class="cards center-block pb-3">
    <article class="card ">

        <div>

        </div>
        <div class="card-img "></div>
        <a href="#">
            <div class="card-img-hover" style="background-image: url(images/movie1.png);">
            </div>
        </a>

        <div class="card-info ">
            <span class="card-category">The Duffer Brothers</span>
            <h3 class="card-title text-truncate">Stranger Things</h3>
            <div class="card-img-logo" style="background-image: url(images/Logo.png);margin-top: 6px;">
            </div>
            <h6 class="card-title"> 86/100 </h6>
            <span class="card-by">
                <a href="#" class="card-genre">Action, Adventure, Horror</a>
    </article>



    <article class="card">

        <div>

        </div>
        <div class="card-img"></div>
        <a href="#">
            <div class="card-img-hover" style="background-image: url(images/movie2.png);">
            </div>
        </a>

        <div class="card-info">
            <span class="card-category">DC Universe</span>
            <h3 class="card-title">The Batman</h3>
            <div class="card-img-logo" style="background-image: url(images/Logo.png);margin-top: 6px;">
            </div>
            <h6 class="card-title"> 90/100 </h6>
            <span class="card-by">
                <a href="#" class="card-genre">Action, Adventure, Superheroes</a>
    </article>



    <article class="card">

        <div>

        </div>
        <div class="card-img"></div>
        <a href="#">
            <div class="card-img-hover" style="background-image: url(images/movie3.png);">
            </div>
        </a>

        <div class="card-info">
            <span class="card-category">Marvel</span>
            <h3 class="card-title text-truncate">Spiderman : Into the spiderverse</h3>
            <div class="card-img-logo" style="background-image: url(images/Logo.png);margin-top: 6px;">
            </div>
            <h6 class="card-title"> 86/100 </h6>
            <span class="card-by">
                <a href="#" class="card-genre">Action, Superheroes</a>
    </article>


</section>
@include('Footer')
@endsection
