<head>
    {!! Theme::metatags() !!}
    {{--
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css','themes/coderdocs') }}">
    --}}
    @php
	//Theme::add('/theme/bc/bootstrap/dist/css/bootstrap.css');
	//Theme::add('/theme/pub/assets/fontawesome/js/all.min.js');
    //Theme::add('/theme/pub/css/app.css');
    Theme::add('pub_theme::dist/css/app.css');
	Theme::add('/theme/pub/assets/css/theme.css');
    Theme::add('/theme/pub/css/prism.css');
    Theme::add('/theme/pub/css/xot.css');

    Theme::add('theme::dist/css/app.css');

    @endphp
    {!! Theme::showStyles(false) !!}
    @stack('styles')
</head>
