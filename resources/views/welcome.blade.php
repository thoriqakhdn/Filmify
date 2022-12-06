@extends('layout.main')

@section('container')
<link href="/css/welcome.css" rel="stylesheet">
<section class="top">
    <div class="kolom-kiri">
        <h1><b>Review Semua Film Kesukaanmu</b></h1>
        <p>Di Filmify, kamu dapat mereview dan membagikan reviewmu ke semua orang
            agar semua orang tau bagaimana pendapat orang lain tentang film yang
            mereka tonton. Ayo daftar dan mulai eksplorasi!!</p>
        <form action="/register">
            <input type="button" value="Daftar" onclick="location.href='{{ url('register') }}'">
        </form>
    </div>
    <div class=" kolom-kanan">
</section>
@endsection
