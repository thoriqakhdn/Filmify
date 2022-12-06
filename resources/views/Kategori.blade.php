@include('HeaderHome')
@section('container')

<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach($kategoris as $kategori)
            <div class="col">
                <a href="/Kategori/{{ $kategori->slug }}">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="50%" height="50%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$kategori->title}} </text>
                        </svg>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>



@include('Footer')
