@extends('dashboard.layout.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show d-flex justify-content-center w-25" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{session('success')}}
</div>
@endif

<div class="table-responsive">
    <a href="/Dashboard/kategori/create" class="btn btn-primary mb-3">Tambah kategori</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kategoris as $kategori)
            <tr>
                <td>{{$kategori->id}}</td>
                <td>{{$kategori->title}}</td>
                <td>
                    <form action="/Dashboard/kategori/{{$kategori->id}}" method="post" class="d-inline">
                        @method('delete')
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
