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


<div class="d-flex justify-content-center pb-3">
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2 mt-4">Logout</button>
    </form>
</div>

@include('Footer')
@endsection
