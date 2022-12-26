@extends('HeaderHome')
@section('container')

<link rel="stylesheet" href="css/profile.css">
<div class="container">
    <div class="profile">
        <img src="images/profile.png" class="profile-pic">
        <h1> {{Auth::user()->username}} </h1>
    </div>
</div>


<div class="d-flex justify-content-center pb-3">
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2 mt-4">Logout</button>
    </form>
    @if($user->is_admin)
    <a href="/Dashboard">
        <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2 mt-4">Admin Mode</button></a>
    @endif
</div>

@include('Footer')
@endsection
