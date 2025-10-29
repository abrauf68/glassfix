<!-- Header Here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - Glasfix 24</title>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')
    <style>
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #007bff, #00bfff);
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            z-index: 9999;
        }

        .scroll-to-top i {
            color: #fff;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .scroll-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.5);
        }

        .scroll-to-top:hover i {
            transform: translateY(-3px);
        }

        .scroll-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* Optional subtle pulse animation */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.6);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(0, 123, 255, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
            }
        }

        .scroll-to-top__wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            animation: pulse 2s infinite;
        }
    </style>

</head>


<body class="custom-cursor body-bg-color">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{ asset('assets/images/logo.webp') }});"></div>
    </div>
    <!-- /.preloader -->
    {{-- <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Zurück nach oben</span>
    </a> --}}
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <div class="page-wrapper">
        <!-- Main Header Start -->
        @include('frontend.layouts.header')
        <!-- /Main Header Start -->

        <!--Page Header Start-->
        @if (request()->routeIs('frontend.home'))
        @else
            <section class="page-header">
                <div class="page-header__wrap">
                    <div class="page-header__shape-1"
                        style="background: radial-gradient(circle at left center, rgba(30,144,255,0.9) 0%, rgba(0,74,143,0.8) 40%, rgba(0,74,143,0) 100%);">
                    </div>

                    <div class="container">
                        <div class="page-header__inner">
                            <div class="page-header__shape-2"></div>
                            <div class="page-header__shape-3"></div>
                            <div class="page-header__shape-4"></div>
                            <div class="page-header__img-1">
                                <img style="max-height: 500px;" src="{{ asset('assets/images/team/about-1.png') }}"
                                    alt="{{ env('APP_NAME') }}">
                                <div class="page-header__shape-5">
                                    <img src="{{ asset('assets/images/shapes/page-header-shape-5.png') }}"
                                        alt="{{ env('APP_NAME') }}">
                                </div>
                            </div>
                            <h2>@yield('title')</h2>
                            <div class="thm-breadcrumb__box">
                                <ul class="thm-breadcrumb list-unstyled">
                                    <li><a href="{{ route('frontend.home') }}">Heim</a></li>
                                    <li><span class="icon-angle-right"></span></li>
                                    <li>@yield('title')</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!--Page Header End-->

        <!-- Main Header Start -->
        @yield('content')
        <!-- /Main Header Start -->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->

        <!-- Sidebar Start -->
        @include('frontend.layouts.sidebar')
        <!-- /Sidebar Start -->

        <!--Site Footer Start-->
        @include('frontend.layouts.footer')
        <!--Site Footer End-->
    </div>
    <!-- /.page-wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('frontend.home') }}" aria-label="logo image">
                    <img src="{{ asset('assets/images/logo.webp') }}" width="135" alt="{{ env('APP_NAME') }}" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@glasfix24.de">info@glasfix24.de</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:4915111660169">+49 151 11660169</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <!-- JS Here -->
    @include('frontend.layouts.script')
    @yield('script')
</body>

</html>
