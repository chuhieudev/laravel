@extends('index')
@section('page_title','News');	
@section('content')
	@include('header.header')
	@include('News.news')
	@include('footer.footer')
@endsection
