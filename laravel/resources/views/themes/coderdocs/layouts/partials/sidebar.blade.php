<div id="docs-sidebar" class="docs-sidebar" >
	<div class="top-search-box d-lg-none p-3">
		<form class="search-form">
			<input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
			<button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		</form>
	</div>
	<nav id="docs-nav" class="docs-nav navbar">
		<ul class="section-items list-unstyled nav flex-column pb-3">
			@foreach(Theme::xotModel('article')->where('parent_id',0)->get() as $article)
				<li class="nav-item section-title">
					<a class="nav-link {{-- scrollto active --}}" href="{{ Panel::get($article)->showUrl() }}">
						<span class="theme-icon-holder mr-2">
							<i class="fas fa-map-signs"></i>
						</span>
						{{ $article->post_id }}][{{ $article->parent_id }}]{{ $article->title }}
					</a>
				</li>
				@foreach($article->sons as $sub)
					<li class="nav-item">
						<a class="nav-link " href="{{ Panel::get($sub)->showUrl() }}">
							{{ $sub->post_id }}][{{ $sub->parent_id }}]{{ $sub->title }}
						</a>
					</li>
				@endforeach
			@endforeach
		</ul>
	</nav>
	<!--//docs-nav-->
</div>
<!--//docs-sidebar-->