
@extends('layouts.master')


@section('title')
	
	<title>Welcome</title>

@endsection


@section('css')

	<link href="css/welcome.css" rel="stylesheet">

@endsection

@section('content')

	@include('welcome.content');

@endsection
