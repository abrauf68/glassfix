<header class="main-header">
    <div class="main-header__wrapper">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="container">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-header__logo">
                                <a href="{{ route('frontend.home') }}"><img height="50px" src="{{ asset('assets/images/logo.webp') }}" alt="{{ env('APP_NAME') }}"></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="{{ request()->routeIs('frontend.home') ? 'current' : '' }}">
                                    <a href="{{ route('frontend.home') }}">Autoglasreparatur</a>
                                </li>
                                <li class="{{ request()->routeIs('frontend.about') ? 'current' : '' }}">
                                    <a href="{{ route('frontend.about') }}">Über Uns</a>
                                </li>
                                <li class="{{ request()->routeIs('frontend.how-it-works') ? 'current' : '' }}">
                                    <a href="{{ route('frontend.how-it-works') }}">So funktioniert’s</a>
                                </li>
                                <li class="{{ request()->routeIs('frontend.faqs') ? 'current' : '' }}">
                                    <a href="{{ route('frontend.faqs') }}">FAQs</a>
                                </li>
                                <li class="{{ request()->routeIs('frontend.contact') ? 'current' : '' }}">
                                    <a href="{{ route('frontend.contact') }}">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__social">
                                <a href="#"><span class="icon-facebook-f"></span></a>
                                <a href="#"><span class="icon-Vector"></span></a>
                                <a href="#"><span class="icon-instagram"></span></a>
                                <a href="#"><span class="icon-pintarest"></span></a>
                            </div>
                            <div class="main-menu__nav-sidebar-icon">
                                <a class="navSidebar-button" href="#">
                                    <span class="icon-dots-menu-one"></span>
                                    <span class="icon-dots-menu-two"></span>
                                    <span class="icon-dots-menu-three"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->
