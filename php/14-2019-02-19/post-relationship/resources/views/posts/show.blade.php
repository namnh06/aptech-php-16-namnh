@extends('layouts.app') 
@section('content')

<h1 class="text-danger text-center text-uppercase">{{$post->title}}</h1>
<h3>In {{$post->category}}</h3>
{!! $post->content !!}
@endsection
