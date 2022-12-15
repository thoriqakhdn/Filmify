@extends('HeaderHome')
@section('container')

<h1> </h1>
<p>{{$films->body}}</p>
<img src="{{$films->foto}}" alt="">


@include('Footer')
@endsection
