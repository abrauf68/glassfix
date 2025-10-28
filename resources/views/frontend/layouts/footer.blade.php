<footer class="site-footer">
    <div class="site-footer__wrap">
        <div class="site-footer__shape-1"></div>
        <div class="site-footer__shape-2"></div>
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="row">
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="{{ route('frontend.home') }}"><img height="50px" src="{{ asset('assets/images/logo.webp') }}"
                                            alt="{{ env('APP_NAME') }}"></a>
                                </div>
                                <div class="footer-widget__contact-info">
                                    <ul class="footer-widget__contact-list list-unstyled">
                                        <li>
                                            <div class="footer-widget__contact-icon-box">
                                                <span class="icon-pin"></span>
                                                <p>Adresse</p>
                                            </div>
                                            <p class="footer-widget__contact-text">Neckarstraße 1, 71083 Herrenberg</p>
                                        </li>
                                        <li>
                                            <div class="footer-widget__contact-icon-box">
                                                <span class="icon-phone"></span>
                                                <p>Telefonnummer</p>
                                            </div>
                                            <p class="footer-widget__contact-text"><a href="tel:4915111660169">+49 151 11660169</a></p>
                                        </li>
                                        <li>
                                            <div class="footer-widget__contact-icon-box">
                                                <span class="icon-mail"></span>
                                                <p>E-Mail</p>
                                            </div>
                                            <p class="footer-widget__contact-text"><a
                                                    href="mailto:info@glasfix24.de">info@glasfix24.de</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__page-link">
                                <h4 class="footer-widget__title">Seiten</h4>
                                <ul class="footer-widget__page-link-list list-unstyled">
                                    <li>
                                        <a href="{{ route('frontend.home') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Heim</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.about') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Über Uns</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.how-it-works') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>So funktioniert’s</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.faqs') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>FAQs</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.contact') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Kontakt</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__page-link">
                                <h4 class="footer-widget__title">Quicklinks</h4>
                                <ul class="footer-widget__page-link-list list-unstyled">
                                    <li>
                                        <a href="{{ route('frontend.terms-and-conditions') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Allgemeine Geschäftsbedingungen (AGB)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.privacy-policy') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Datenschutzbestimmungen</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.imprint') }}">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Impressum</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__services">
                                <h4 class="footer-widget__title">Dienstleistungen</h4>
                                <ul class="footer-widget__page-link-list list-unstyled">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Mobiler Autoglas-Service – wir kommen direkt zu dir!</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Windschutzscheiben-Austausch & Steinschlagreparatur</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Komplette Schadensabwicklung mit deiner Versicherung</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>25 Jahre Garantie auf die Dichtheit deiner neuen Scheibe</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="icon-double-arrow-right"></span>
                                            <p>Kostenloses Angebot in wenigen Minuten</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__copyright">
                                <p class="site-footer__copyright-text">Copyright © {{ date('Y') }} <a href="{{ route('frontend.about') }}">Glasfix 24</a>.
                                    Alle Rechte vorbehalten.</p>
                            </div>
                            <div class="site-footer__bottom-menu-box">
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <li><a href="{{ route('frontend.terms-and-conditions') }}">Allgemeine Geschäftsbedingungen (AGB)</a></li>
                                    <li><a href="{{ route('frontend.privacy-policy') }}">Datenschutzbestimmungen</a></li>
                                    <li><a href="{{ route('frontend.imprint') }}">Impressum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
