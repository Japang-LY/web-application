
@extends('layouts.master')


@section('title')
	
	<title>Account</title>

@endsection


@section('css')

	<link href="css/account.css" rel="stylesheet">

@endsection


@section('content')
	
	@include('layouts.userNavBar')
	@include('account.content')

@endsection
