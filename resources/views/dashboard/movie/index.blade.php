@extends('dashboard.layout.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Movies</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show d-flex justify-content-center w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{session('success')}}
</div>
@endif

<div class="table-responsive">
    <a href="/Dashboard/movie/create" class="btn btn-primary mb-3">Tambah Movie</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori_id</th>
                <th scope="col">Title</th>
                <th scope="col">Rating</th>
                <th scope="col">Upvote</th>
                <th scope="col">Review</th>
            </tr>
        </thead>

        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->kategori_id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->rating}}</td>
                <td>{{$movie->upvote}}</td>
                <td>{{$movie->reviews}}</td>
                <td>
                    <form action="/Dashboard/movie/{{$movie->id}}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus ?')"> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
