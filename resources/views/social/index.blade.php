
@extends('layouts.master')


@section('title')
	
	<title>Social</title>

@endsection


@section('css')

	<link href="css/social.css" rel="stylesheet">

@endsection


@section('content')
	
	@include('social.content')

@endsection
