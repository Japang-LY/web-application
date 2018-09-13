
@extends('layouts.master')


@section('title')
	
	<title>Admin</title>

@endsection


@section('css')

	<link href="css/admin.css" rel="stylesheet">

@endsection


@section('content')

	@include('layouts.adminNavbar')
	@include('admin.content')

@endsection


@section('js')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/popper.min.js"></script>

@endsection
