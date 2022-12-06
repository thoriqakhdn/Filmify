@extends(' layout.main')
@section('container')

<link href="css/tentang.css" rel="stylesheet">
<main>
    <div class="bg-image"></div>
    <div class="text">
        <h1> <b>Filmify</b></h1>
        <p>Filmify adalah website review film no 1 di Indonesia. Disini kamu bisa
            membagikan komentar atau pendapatmu tentang film yang sedang kamu tonton dan
            dapat membagikannya ke orang lain agar dapat saling berbagi cerita pengalaman
            saat menonton film kesukaanmu.</p>
    </div>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</main>

@endsection
