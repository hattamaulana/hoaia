<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/">
                        <img src="{{ $brand }}" alt="" width="75" height="25">
                    </a>

                    <button class="navbar-toggler" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-5 pl-lg-5 mr-auto">
                            <li class="nav-item {{ $slot }}">
                                <a class="nav-link" href="{{ route( 'user.forest' ) }}">Hutan</a>
                            </li>

                            <li class="nav-item {{ $slot }}">
                                <a class="nav-link" href="{{ route( 'user.donation' ) }}">Donasi</a>
                            </li>

                            <li class="nav-item {{ $slot }}">
                                <a class="nav-link" href="{{ route( 'user.visiAndMission' ) }}">Visi Misi</a>
                            </li>
                        </ul>

                        <div class="nav navbar-nav menu_nav">
                            @if(\Illuminate\Support\Facades\Auth::check() == false)
                                <li class="nav-item {{ $slot }}"><a class="nav-link" href="/register">Register</a></li>
                                <li class="nav-item {{ $slot }}"><a class="nav-link" href="/login">Login</a></li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>{{ __('Logout') }}</p>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================ End Header Menu Area =================-->
