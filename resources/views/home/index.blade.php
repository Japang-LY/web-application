
@extends('layouts.master')


@section('title')
	
	<title>Home</title>

@endsection


@section('css')

	<link href="css/home.css" rel="stylesheet">

@endsection

@section('content')

	@include('layouts.userNavbar')
	@include('home.content');

@endsection


@section('js')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>

@endsection
