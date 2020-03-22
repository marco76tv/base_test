@extends('pub_theme::layouts.plane')
@section('body')
	@include('pub_theme::layouts.partials.headernav')

  @yield('content')


	@if(isset($footer) && $footer=='off')
	@else
	@include('pub_theme::layouts.partials.footer')
	@endif
@endsection
