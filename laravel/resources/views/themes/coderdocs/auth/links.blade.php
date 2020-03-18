@if(\Auth::check())
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" title="Welcome {{\Auth::user()->handle}}" href="#" data-effect="mfp-move-from-top" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>@lang('lu::headernav.welcome') {{\Auth::user()->handle}}!
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ url(\App::getLocale().'/profile/'.\Auth::user()->handle) }}" class="dropdown-item" title="profile">Profile</a></li>
            <li><a href="{{ url('/logout') }}" class="dropdown-item" title="logout"
                onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                Logout
            </a></li>
            <form id="logout-form" action="{{ route('logout',['lang'=>$lang]) }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </li>
@else
    <li class="nav-item">
        {{--
            <a href="{{ route('login',['lang'=>$lang]) }}" class="ajax-popup-link nav-link" id="js-login" title="login">
                <i class="fas fa-sign-in-alt"></i>&nbsp;Sign in
            </a>
        --}}
        <a href="{{ route('login',['lang'=>$lang]) }}" class="nav-link" data-toggle="modal" data-target="#vueModal" data-title="login" data-href="{{ route('login',['lang'=>$lang]) }}">
            <i class="fas fa-sign-in-alt"></i>&nbsp;Sign in
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('register',['lang'=>$lang]) }}" class="nav-link" title="register" data-toggle="modal" data-target="#vueModal" data-title="register" data-href="{{ route('register',['lang'=>$lang]) }}">
            <i class="fa fa-edit"></i>&nbsp;Sign up
        </a>
    </li>
@endif
