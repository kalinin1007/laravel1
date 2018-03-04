<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('layouts.main')



@section('content')
    <p>parent content:</p>
        @parent
    <p>loop foreach:</p>
   <ul>
	@foreach($data as $k=>$value)
		<li>{{ $k.'=>'.$value}}</li>
	@endforeach
    </ul>
@endsection