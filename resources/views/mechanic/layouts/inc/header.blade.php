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
                <a href="{{ route('mechanic.home') }}" class="navbar-brand logo">
                    <h3><img src="{{ asset('assets/user/img/logo-small.png') }}" class="img-fluid" alt="Logo"> Mechanic Finder</h3>
                </a>
                <a href="{{ route('mechanic.home') }}" class="navbar-brand logo-small">
                    <img src="{{ asset('assets/user/img/logo-small.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('mechanic.home') }}" class="menu-logo">
                        <h3> Mechanic Finder</h3>
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                            class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class=" {{ Route::is('mechanic.home') ? 'active' : '' }}">
                        <a href="{{ route('mechanic.home') }}">Home</i></a>
                    </li>
                    <li class="{{ Route::is('mechanic.mechanics') ? 'active' : '' }}">
                        <a href="{{ route('mechanic.mechanics') }}">Find Mechanics</i></a>

                    </li>
                    <li class="{{ Route::is('mechanic.about') ? 'active' : '' }}">
                        <a href="{{ route('mechanic.about') }}">About</i></a>
                    </li>
                    <li class="{{ Route::is('mechanic.contact') ? 'active' : '' }}"><a href="{{ route('mechanic.contact') }}">Contact</a></li>
                </ul>
            </div>
            @guest('mechanic')
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

            @auth('mechanic')
            <ul class="nav header-navbar-rht">

                <li class="nav-item dropdown logged-item noti-nav noti-wrapper">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="bell-icon"><img src="{{ asset('assets/user/img/icons/bell-icon.svg') }}" alt="Bell"></span>
                        <span class="badge badge-pill"></span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-lg flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('assets/user/img/profiles/avatar-01.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Jonathan Doe
                                                    </span> has booked <span class="noti-title">your
                                                        service</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('storage/uploads/mechanic/'. Auth::guard('mechanic')->user()->logo) }}" alt="Profile">
                        </span>
                        <span class="user-text">{{ Auth::guard('mechanic')->user()->username }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('mechanic.profile') }}">
                            <i class="feather-user-check"></i> Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('mechanic.reviews') }}">
                            <i class="feather-message-square"></i> Reviews
                        </a>

                        <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logout').submit()">
                            <i class="feather-power"></i> Logout
                        </a>
                        <form action="{{ route('mechanic.logout') }}" id="logout" method="post">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
            @endauth
        </nav>
    </div>
</header>
