<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>لنا الله</title>
    <!-- loader-->
    <script src={{ url('https://cdn.tailwindcss.com') }}></script>
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">
    <link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <!--Full Calendar Css-->
    <link href="{{ url('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel='stylesheet' />
    <link rel="icon" href="{{ url('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ url('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ url('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ url('assets/css/app-style.css') }}" rel="stylesheet" />

</head>
<style>
    /* From Uiverse.io by Shoh2008 */
    button {
        padding: 15px 30px;
        font-size: 18px;
        outline: none;
        border: none;
        border-radius: 10px;
        transition: 0.5s;
        background: #1e1e1e;
        cursor: pointer;
        color: greenyellow;
        box-shadow: 0 0 10px #363636, inset 0 0 10px #363636;
    }

    button:hover {
        animation: a 0.5s 1 linear;
    }

    @keyframes a {
        0% {
            transform: scale(0.7, 1.3);
        }

        25% {
            transform: scale(1.3, 0.7);
        }

        50% {
            transform: scale(0.7, 1.3);
        }

        75% {
            transform: scale(1.3, 0.7);
        }

        100% {
            transform: scale(1, 1);
        }
    }

    /* From Uiverse.io by Shoh2008 */
    .checkbox-wrapper-4 * {
        box-sizing: border-box;
        color: white;
    }

    .checkbox-wrapper-4 .cbx {
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        padding: 6px 8px;
        border-radius: 6px;
        overflow: hidden;
        transition: all 0.2s ease;
        display: inline-block;
    }

    .checkbox-wrapper-4 .cbx:not(:last-child) {
        margin-right: 6px;
    }

    .checkbox-wrapper-4 .cbx:hover {
        background: rgba(0, 119, 255, 0.06);
    }

    .checkbox-wrapper-4 .cbx span {
        float: left;
        vertical-align: middle;
        transform: translate3d(0, 0, 0);
    }

    .checkbox-wrapper-4 .cbx span:first-child {
        position: relative;
        width: 18px;
        height: 18px;
        border-radius: 4px;
        transform: scale(1);
        border: 1px solid #cccfdb;
        transition: all 0.2s ease;
        box-shadow: 0 1px 1px rgba(0, 16, 75, 0.05);
    }

    .checkbox-wrapper-4 .cbx span:first-child svg {
        position: absolute;
        top: 3px;
        left: 2px;
        fill: none;
        stroke: #fff;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 16px;
        stroke-dashoffset: 16px;
        transition: all 0.3s ease;
        transition-delay: 0.1s;
        transform: translate3d(0, 0, 0);
    }

    .checkbox-wrapper-4 .cbx span:last-child {
        padding-left: 8px;
        line-height: 18px;
    }

    .checkbox-wrapper-4 .cbx:hover span:first-child {
        border-color: #07f;
    }

    .checkbox-wrapper-4 .inp-cbx {
        position: absolute;
        visibility: hidden;
    }

    .checkbox-wrapper-4 .inp-cbx:checked+.cbx span:first-child {
        background: #07f;
        border-color: #07f;
        animation: wave-4 0.4s ease;
    }

    .checkbox-wrapper-4 .inp-cbx:checked+.cbx span:first-child svg {
        stroke-dashoffset: 0;
    }

    .checkbox-wrapper-4 .inline-svg {
        position: absolute;
        width: 0;
        height: 0;
        pointer-events: none;
        user-select: none;
    }

    @media screen and (max-width: 640px) {
        .checkbox-wrapper-4 .cbx {
            width: 100%;
            display: inline-block;
        }
    }

    @-moz-keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    @-webkit-keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    @-o-keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    @keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    .menu {
        font-size: 16px;
        line-height: 1.6;
        padding-top: 20px;
        color: #b6b2b2;
        width: fit-content;
        display: flex;
        list-style: none;
        flex-direction: column;
        /* Added for RTL support */
        text-align: right;
        /* Added for RTL support */
    }

    .menu a {
        text-decoration: none;
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .menu .link {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* Changed for RTL support */
        gap: 12px;
        padding: 12px 20px;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .link::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 1%;
        height: 100%;
        background-color: #0a3cff;
        z-index: -1;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .link svg {
        width: 14px;
        height: 14px;
        fill: #000000;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .menu .item {
        position: relative;
    }

    .menu .item .submenu {
        display: none;
        /* Hidden by default */
        flex-direction: column;
        align-items: flex-end;
        /* Changed for RTL support */
        border-radius: 0 0 16px 16px;
        left: 0;
        width: 100%;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-12px);
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        z-index: 1;
        pointer-events: none;
        list-style: none;
    }

    .menu .item.active .submenu {
        display: flex;
        /* Show when active */
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        pointer-events: auto;
        border-top: transparent;
        border-color: #0a3cff;
    }

    .menu .item:hover .link {
        color: #ffffff;
        width: 250px;
        border-radius: 16px 160px 0 0;
    }

    .menu .item:hover .link::after {
        transform: scaleX(1);
        transform-origin: right;
    }

    .menu .item:hover .link svg {
        fill: #ffffff;
        transform: rotate(-180deg);
    }

    .submenu .submenu-item {
        width: 100%;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-link {
        display: block;
        padding: 12px 24px;
        width: 100%;
        position: relative;
        text-align: center;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-item:last-child .submenu-link {
        border-bottom: none;
    }

    .submenu .submenu-link::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        width: 100%;
        height: 100%;
        background-color: #0a3cff;
        z-index: -1;
        transform-origin: left;
        transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .submenu .submenu-link:hover:before {
        transform: scaleX(1);
        transform-origin: right;
    }

    .submenu .submenu-link:hover {
        color: #ffffff;
    }
</style>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" {{-- class="{{ app()->getLocale() === 'ar' ? 'sidebar-right' : 'sidebar-left' }}" --}}
            style="{{ app()->getLocale() === 'ar' ? 'margin-left: 100%' : 'margin-left: 0' }}">
            <div class="brand-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <img src={{ url('assets/images/logo-icon.png') }} class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">@lang('messages.ADMIN DASHBOARD') </h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">@lang('messages.MAIN NAVIGATION')</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>@lang('messages.Dashboard')</span>
                    </a>
                </li>

                {{-- <div class="menu">
                    <div class="item">
                        <a href="#" class="link" onclick="toggleSubmenu(this)">
                            <span class="zmdi zmdi-format-list-bulleted"> General Setting </span>
                            <svg viewBox="0 0 360 360" xml:space="preserve">
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Site Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Language Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> SMTP Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Branches Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Currencies Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Client Suppliers Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Goods Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Jobs Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Payment Methods Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Client Types Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Sailing Boats Settings </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Goods Suppliers </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="item">
                        <a href="#" class="link" onclick="toggleSubmenu(this)">
                            <span class="icon-settings mr-2"> Services Management </span>
                            <svg viewBox="0 0 360 360" xml:space="preserve">
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Types Settings </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="item">
                        <a href="#" class="link" onclick="toggleSubmenu(this)">
                            <span class="icon-settings mr-2">Clients Management</span>
                            <svg viewBox="0 0 360 360" xml:space="preserve">
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Clients </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="item">
                        <a href="#" class="link" onclick="toggleSubmenu(this)">
                            <span class="icon-settings mr-2">Booking Management</span>
                            <svg viewBox="0 0 360 360" xml:space="preserve">
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Bookings </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="item">
                        <a href="#" class="link" onclick="toggleSubmenu(this)">
                            <span class="icon-settings mr-2">Extra Services Management</span>
                            <svg viewBox="0 0 360 360" xml:space="preserve">
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Extra Services </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Booking Extra Services </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="item">
                        <a href="#" class="link" onclick="toggleSubmenu(this)">
                            <span class="icon-settings mr-2">Reports & Statistics</span>
                            <svg viewBox="0 0 360 360" xml:space="preserve">
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="submenu">
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Clients Report </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Client Suppliers Report </a>
                            </div>
                            <div class="submenu-item">
                                <a href="#" class="submenu-link"> Booking Groups Report </a>
                            </div>

                        </div>
                    </div>
                </div>
                <li>
                    <a href="icons">
                        <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
                    </a>
                </li>

                <li>
                    <a href="forms">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
                    </a>
                </li>

                <li>
                    <a href="tables">
                        <i class="zmdi zmdi-grid"></i> <span>Tables</span>
                    </a>
                </li>

                <li>
                    <a href="calendar">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('admins.index') }}">
                        <i class="zmdi zmdi-face"></i> <span>@lang('messages.Admins')</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="login" target="_blank">
                        <i class="zmdi zmdi-lock"></i> <span>Login</span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('rules.permissions.index') }}">
                        <i class="zmdi zmdi-account-circle"></i> <span>@lang('messages.Rules & Permissions')</span>
                    </a>
                </li>
                {{--
                <li class="sidebar-header">LABELS</li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i>
                        <span>Important</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a></li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i>
                        <span>Information</span></a>
                </li> --}}

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu " href="javascript:void();">
                            <i class="icon-menu menu-icon "></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul
                            class="dropdown-menu {{ app()->getLocale() === 'ar' ? 'dropdown-menu-left' : 'dropdown-menu-right' }}">
                            <li class="dropdown-item"> <a class="flag-icon flag-icon-gb mr-2"
                                    href="{{ route('lang', 'en') }}"></a>
                                English</li>
                            <li class="dropdown-item"> <a href="{{ route('lang', 'ar') }}"
                                    class="flag-icon flag-icon-eg mr-2"></a>
                                Arabic
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="#">
                            <span class="user-profile"><img src="{{ url('assets/images/logo-icon.png') }}"
                                    class="img-circle" alt=""></span>
                        </a>

                        <ul
                            class="dropdown-menu {{ app()->getLocale() === 'ar' ? 'dropdown-menu-left' : 'dropdown-menu-right' }}">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="{{ url('assets/images/bg-themes/2.png') }}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">
                                                {{ Auth::guard('admin')->user()->name }}</h6>
                                            <p class="user-subtitle">{{ Auth::guard('admin')->user()->email }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> @lang('messages.inbox')</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> @lang('messages.Account')</li>
                            <li class="dropdown-divider"></li>
                            <x-responsive-nav-link :href="route('admin.pages.adminprofile')" style="background-color: transparent ">
                                <li class="dropdown-item"><i class="icon-settings mr-2"
                                        style="margin-left: -20px"></i> @lang('messages.Seting')</li>
                            </x-responsive-nav-link>
                            <li class="dropdown-divider"></li>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                    style="background-color: transparent ">
                                    <li class="dropdown-item"><i class="icon-power mr-2"
                                            style="margin-left: -20px"></i>
                                        @lang('messages.Logout')</li>
                                </x-responsive-nav-link>
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>
        <div style="margin:50px ;padding-bottom: 10%">
            @yield('content')
        </div>
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dashtreme Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

    <!-- simplebar js -->
    <script src="{{ url('assets/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ url('assets/js/sidebar-menu.js') }}"></script>
    <!-- loader scripts -->
    <script src="{{ url('assets/js/jquery.loading-indicator.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ url('assets/js/app-script.js') }}"></script>
    <!-- Chart js -->

    <script src="{{ url('assets/plugins/Chart.js/Chart.min.js') }}"></script>

    <!-- Index js -->
    <script src="{{ url('assets/js/index.js') }}"></script>


    <!-- Full Calendar -->
    <script src="{{ url('assets/plugins/fullcalendar/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ url('assets/plugins/fullcalendar/js/fullcalendar-custom-script.js') }}"></script>

    {{-- <script>
        function toggleSubmenu(element) {
            const submenu = element.nextElementSibling;
            const item = element.parentElement;

            // Toggle active class
            item.classList.toggle('active');

            // Toggle submenu visibility
            if (item.classList.contains('active')) {
                submenu.style.display = 'flex';
            } else {
                submenu.style.display = 'none';
            }
        } <
        script >
            function changeLanguage(lang) {
                // Set the selected language in local storage
                localStorage.setItem('language', lang);
                // Reload the page to apply the language change
                location.reload();
                // Set the selected language in local storage
                localStorage.setItem('language', lang);
                // Reload the page to apply the language change
                location.reload();
            }
    </script> --}}

</body>

</html>
