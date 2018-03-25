<?php
    //dump($href);
    dump($data);
?>

@extends('layouts.base')

@section('footer')
    @foreach ($data as $post)
      <h2>Это  {{ $post->title }}</h2>
      <p> {{ $post->text }}</p>
    @endforeach

@endsection