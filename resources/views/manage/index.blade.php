
@extends('layouts.master')


@section('title')
	
	<title>Manage</title>

@endsection


@section('css')

	<link href="css/manage.css" rel="stylesheet">

@endsection


@section('content')

	@include('layouts.manageNavbar')
	@include('manage.content')

@endsection


@section('js')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/popper.min.js"></script>

@endsection
