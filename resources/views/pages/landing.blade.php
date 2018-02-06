@extends('layout')


	@section('header')

	@include('partials.navbar')

	@include('partials.mobile-header')

	@include('partials.header')

	@endsection


	@section('body')

	@include('partials.divider')

	@include('partials.jumbotron')

	@include('partials.divider')

	@include('partials.middle')

	@include('partials.services')

	@endsection
	

	@section('footer')

	@include('partials.divider')

	@include('partials.footer')

	@endsection

	
