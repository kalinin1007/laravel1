<?php
    //dump($href);
    //dump($post);
    //dump($coments);
    dump($can_comment);
    //use App\Post;
?>

@if(Auth::check() && $can_comment)
    <h1>Yess you can</h1>
@endif


@can('post3', App\Post::class)
	<h2> new post3</h2>
@endcan

@extends('layouts.base')

@section('footer')
    <h2>{{ $post->title }}</h2>
    Comments: <hr>
    @foreach ($coments as $com)
      <h2>Это  {{ $com->author }}</h2>
      <p> {{ $post->text }}</p>
    @endforeach

@endsection