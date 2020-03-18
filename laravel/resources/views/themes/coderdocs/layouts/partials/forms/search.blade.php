{{-- \Request::getRequestUri() --}}
{{-- request()->fullUrl() 
	action="{{ request()->fullUrl() }}"
	--}}
@php
	$qs=collect(request()->query())->except(['q'])->all();
@endphp
<form  class="{{-- d-none --}} d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right" method="get">
	<div class="input-group">
		<input name="q" type="text" class="form-control {{-- bg-light border-0 --}}  small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ Request::input('q') }}">
		@foreach($qs as $k=>$v)
			<input type="hidden" name="{{ $k }}" value="{{ $v }}" >
		@endforeach
		<div class="input-group-append">
			<button class="btn btn-primary" type="submit">
			<i class="fas fa-search fa-sm"></i>
			</button>
		</div>
	</div>
</form>
