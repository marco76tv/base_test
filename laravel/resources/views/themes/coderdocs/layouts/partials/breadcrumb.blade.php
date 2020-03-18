<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  	@foreach($params as $v)
    	<li class="breadcrumb-item">
    		{{--
    			idea
    			Theme::breadCrumItem(['row'=>$v])
    			da poter restituire anche oggetti schemaOrg 
    		--}}
			@if(is_object($v))	    		
    		<a href="{{ $v->url }}">{{ $v->title }}</a>
    		@else
    		<a href="#">{{ $v }}</a>
    		@endif
    	</li>
    @endforeach
    @php
        $routename=Route::currentRouteName();
        $act=last(explode('.',$routename));
    @endphp
    <li class="breadcrumb-item active" aria-current="page">
    	<a href="{{ url()->current() }}" class="active">{{ $act }}</a>
    </li>
  </ol>
</nav>