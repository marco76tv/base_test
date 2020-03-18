@php
	$articles=Theme::xotModel('article')
				->where('parent_id',0)
				->orderBy('pos')
				->get();
	//ddd($articles);
@endphp
<div class="docs-overview py-5">
    {{--
	<div class="row justify-content-center">
			[start]
			<example-component></example-component>
			flash
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vueModal" data-title="111">Open modal 111</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vueModal" data-title="login" data-href="{{ route('login') }}">Login</button>

            [rating]
            <rating-one value="3.23" title="qualita"></rating-one>
            <rating-one value="2" title="servizio"></rating-one>
            <rating-one value="1" title="conto"></rating-one>
			[end]
    </div>
    --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vueIframeModal" data-title="login" data-href="{{ route('login') }}">Login</button>
	<div class="row justify-content-center">
		@foreach($articles as $article)
		@php
			$panel=Panel::get($article);
		@endphp
		<div class="col-12 col-lg-4 py-3">
			<div class="card shadow-sm">

				<div class="card-body">
					<h5 class="card-title mb-3">
						<span class="theme-icon-holder card-icon-holder mr-2">
							<i class="fas fa-map-signs"></i>
						</span><!--//card-icon-holder-->
						<span class="card-title-text">{{ $article->title }}</span>
					</h5>
					<div class="card-text">
						{{ $article->subtitle }}
					</div>
					<a class="card-link-mask" href="{{ $panel->url() }}"></a>
				</div>
				<!--//card-body-->
				{{--
				<div class="card-footer">
					<span class="badge badge-secondary">{!! $article->ratingAvgHtml() !!} </span>
				</div>
				--}}
			</div>
			<!--//card-->
		</div>
		@endforeach
		<!--//col-->
	</div>
</div>
