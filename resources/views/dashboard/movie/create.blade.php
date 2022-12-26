@extends('dashboard.layout.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah movie</h1>
</div>


<form method="post" action="/Dashboard/movie">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input type="text" class="form-control" id="body" name="body">
    </div>
    <div class="mb-3">
        <label for="excerpt" class="form-label">Excerpt</label>
        <input type="text" class="form-control" id="excerpt" name="excerpt">
    </div>
    <div class="mb-3">
        <label for="studio" class="form-label">Studio</label>
        <input type="text" class="form-control" id="studio" name="studio">
    </div>
    <div class="mb-3">
        <label for="actor" class="form-label">Actor</label>
        <input type="text" class="form-control" id="actor" name="actor">
    </div>
    <div class="mb-3">
        <label for="rilis" class="form-label">Tanggal rilis</label>
        <input type="text" class="form-control" id="rilis" name="rilis">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">link photo</label>
        <input type="text" class="form-control" id="photo" name="photo">
    </div>
    <div class="mb-3">
        <label for="rating" class="form-label">Rating</label>
        <input type="text" class="form-control" id="rating" name="rating">
    </div>
    <div class="mb-3">
        <label for="kategori_id" class="form-label">Kategori</label>
        <select class="form-select" id="floatingSelect" name="kategori_id">
            @foreach($kategoris as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->title}}</option>
            @endforeach
        </select>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
