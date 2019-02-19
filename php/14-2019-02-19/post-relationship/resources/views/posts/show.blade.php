@extends('layouts.app') 
@section('content')

<h1 class="">{{$post->title}}</h1>
<h3>In {{$post->category->name}}</h3>
{!! $post->content !!}
@endsection
