@extends('main')

@section('main_header')

	@section('top-navbar')
		<x-store.top-navbar />
	@show

	@section('navbar')
		<x-store.navbar />		
	@show

	@section('main-banner')
		<x-store.main-banner />		
	@show

@endsection

@section('main_content')

	@yield('content')

@endsection

@section('main_footer')
	
	@section('footer')
		<x-store.footer />
	@show

	@section('copy')
		<x-store.copy />
	@show

@endsection

@section('main_css_files')

    <link href="{{ asset ('css/ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('css/nutricell.min.css') }}" rel="stylesheet" />
	@yield('css_files')
	
@endsection

@section('main_js_files')
	
	<script src="{{ asset ('js/nutricell.min.js') }}"></script>
	@yield('js_files')
	
@endsection
