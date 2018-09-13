
@extends('layouts.master')


@section('title')
	
	<title>Manual</title>

@endsection


@section('css')

	<link href="css/manual.css" rel="stylesheet">

@endsection


@section('content')
	
	@include('manual.content')

@endsection
