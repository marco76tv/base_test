@php
	$langs=collect(config('laravellocalization.supportedLocales'));
	$other_langs=$langs->except($lang);
	$active_lang=$langs[$lang];
	Theme::add("https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css");
@endphp

<div class="btn-group">
	<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="flag-icon flag-icon-{{ $lang }}"> </span> {{ $active_lang['name'] }}
  	</button>
	<div class="dropdown-menu">
		@foreach ($other_langs as $k=>$v)
		@php
			$url=url($k);
			if(isset($row) && is_object($row)){
			//	$url=$row->urlLang(['lang'=>$k]);
			}
			//ddd($row);//article 
		@endphp
		<a class="dropdown-item" href="{{ $url }}">
			<span class="flag-icon flag-icon-{{ ($k=='en')?'us':$k }}"> </span>
			{{ $v['name'] }}
		</a>
		@endforeach
	</div>
</div>

