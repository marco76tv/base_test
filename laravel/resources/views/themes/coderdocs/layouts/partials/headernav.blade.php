{{--
<header id="header" class="{{ isset($header_class)?$header_class:"header-scroll top-header headrom" }}">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
	@includeFirst(['pub_theme::auth.links','lu::auth.links'])
		@include('pub_theme::layouts.partials.headernav.lang')
</nav>
</header>
--}}
<header class="header fixed-top">
	<div class="branding docs-branding">
		<div class="container-fluid position-relative py-2">
			<div class="docs-logo-wrapper">
				<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible mr-2 d-xl-none" type="button">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="site-logo">
					<a class="navbar-brand" href="{{ url('/') }}">
						{{--
						<img class="logo-icon mr-2" src="assets/images/coderdocs-logo.svg" alt="logo">
						--}}
						<span class="logo-text">Coder<span class="text-alt">Docs</span></span>
					</a>
				</div>
			</div><!--//docs-logo-wrapper-->
			<div class="docs-top-utilities d-flex justify-content-end align-items-center">
				<div class="top-search-box d-none d-lg-flex">
					<form class="search-form">
						<input type="text" placeholder="Search the docs..." name="q" class="form-control search-input" value="{{ \Request::input('q') }}">
						<button type="submit" class="btn search-btn" value="Search">
							<i class="fas fa-search"></i>
						</button>
					</form>
                </div>




				@include('pub_theme::layouts.partials.headernav.lang')
				{{--
				<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
					<li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
				</ul><!--//social-list-->

				<a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderdocs-free-bootstrap-4-documentation-template-for-software-projects/" class="btn btn-primary d-none d-lg-flex">Download</a>
				--}}
				<ul class="list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
				@include('pub_theme::auth.links')

				</ul>

			</div><!--//docs-top-utilities-->
		</div><!--//container-->
	</div><!--//branding-->
</header><!--//header-->
