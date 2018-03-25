<?php
    //dump($href);
    dump($post);
    dump($coments);
?>

@extends('layouts.base')

@section('footer')
    <h2>{{ $post->title }}</h2>
    Comments: <hr>
    @foreach ($coments as $com)
      <h2>Это  {{ $com->author }}</h2>
      <p> {{ $post->text }}</p>
    @endforeach

@endsection