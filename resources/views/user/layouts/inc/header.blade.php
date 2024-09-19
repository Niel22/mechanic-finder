<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ route('user.home') }}" class="navbar-brand logo">
                    <h3><img src="{{ asset('assets/user/img/logo-small.png') }}" class="img-fluid" alt="Logo"> Mechanic Finder</h3>
                </a>
                <a href="{{ route('user.home') }}" class="navbar-brand logo-small">
                    <img src="{{ asset('assets/user/img/logo-small.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('user.home') }}" class="menu-logo">
                        <h3> Mechanic Finder</h3>
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                            class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class=" {{ Route::is('user.home') ? 'active' : '' }}">
                        <a href="{{ route('user.home') }}">Home</i></a>
                    </li>
                    <li class="{{ Route::is('user.mechanics') ? 'active' : '' }}">
                        <a href="{{ route('user.mechanics') }}">Find Mechanics</i></a>

                    </li>
                    <li class="{{ Route::is('user.about') ? 'active' : '' }}">
                        <a href="{{ route('user.about') }}">About</i></a>
                    </li>
                    <li class="{{ Route::is('user.contact') ? 'active' : '' }}"><a href="{{ route('user.contact') }}">Contact</a></li>
                </ul>
            </div>
            @guest('web')
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{ route('login') }}"><span><i
                                class="fa-regular fa-user"></i></span>Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{ route('register') }}"><span><i
                                class="fa-solid fa-lock"></i></span>Sign Up</a>
                </li>
            </ul>
            @endguest

            @auth('web')
            <ul class="nav header-navbar-rht">



                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('storage/uploads/user/'. Auth::guard('web')->user()->picture) }}" alt="Profile">
                        </span>
                        <span class="user-text">{{ Auth::guard('web')->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('user.profile') }}">
                            <i class="feather-user-check"></i> Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('user.reviews') }}">
                            <i class="feather-message-square"></i> Reviews
                        </a>

                        <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logout').submit()">
                            <i class="feather-power"></i> Logout
                        </a>
                        <form action="{{ route('user.logout') }}" id="logout" method="post">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
            @endauth
        </nav>
    </div>
</header>
