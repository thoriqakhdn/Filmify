@extends('HeaderHome')
@section('container')

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
            <small class="ms-3 text-primary">{{$review->like}}</small>
            <p class="user-comment mb-1">
                {!! $review->body !!}
            </p>
        </div>
    </div>
    @empty
    <h6>Belum ada review</h6>
    @endforelse

</div>

@include('Footer')
@endsection
