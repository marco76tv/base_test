<script>
    var base_url='{{ asset('/') }}';
    var lang='{{ \App::getLocale() }}';
    {{--  var google_maps_api='{{ config('xra.google.maps.api') }}'; --}}
@if(\Request::has('address'))
    var address ="{{ \Request::input('address') }}";
@endif
@if(\Request::has('lat') && \Request::has('lng'))
    var lat ="{{ \Request::input('lat') }}";
    var lng ="{{ \Request::input('lng') }}";
@endif
</script>
@stack('scripts_before')
@php
    //<script src="{{ mix('js/app.js','themes/coderdocs') }}"></script>
	//Theme::add('/theme/pub/assets/plugins/jquery-3.4.1.min.js',1);
	//Theme::add('/theme/pub/assets/plugins/popper.min.js',2);
	//Theme::add('/theme/pub/assets/plugins/bootstrap/js/bootstrap.min.js',3);

    /*
    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>
    <script src="assets/js/docs.js"></script>
    */
    Theme::add('pub_theme::dist/js/manifest.js',1);
    Theme::add('pub_theme::dist/js/vendor.js',2);
    Theme::add('pub_theme::dist/js/app.js',3);

    //Theme::add('theme::dist/js/app.js');
    /*
    Theme::add('theme::dist/js/manifest.js');
    Theme::add('theme::dist/js/vendor.js');
    Theme::add('theme::dist/js/app.js');
    */


    //Theme::add('/theme/pub/js/app.js');
    Theme::add('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js');
    Theme::add('/theme/pub/assets/js/highlight-custom.js');
    //Theme::add('/theme/pub/assets/plugins/jquery.scrollTo.min.js');
    //Theme::add('/theme/pub/assets/plugins/lightbox/dist/ekko-lightbox.min.js');
    Theme::add('/theme/pub/assets/js/docs.js');
    Theme::add('/theme/pub/js/prism.js');


	//Theme::add('/theme/bc/bootstrap/dist/js/bootstrap.js');
	//Theme::add('/theme/pub/js/xot.js');
@endphp
{!! Theme::showScripts(false) !!}
<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
-->
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
--}}
@stack('scripts')
