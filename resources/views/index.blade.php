<?php
    //dump($href);
    dump($data);
?>

@extends('layouts.base')

@section('footer')
    <h3>new footer</h3>
    {{ $data[0]->title}}
@endsection