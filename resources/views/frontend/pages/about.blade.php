@extends('frontend.layouts.master')

@section('title', 'Über Uns')

@section('css')
<style>
        /* make all service boxes same height */
        .services-one .row {
            display: flex;
            flex-wrap: wrap;
        }

        .services-one .col-xl-4,
        .services-one .col-lg-4 {
            display: flex;
            margin-bottom: 20px;
        }

        .services-one__single {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
    </style>
@endsection

@section('content')
    <!--Counter One Start -->
    <section class="counter-one counter-three">
        <div class="container">
            <div class="counter-one__inner">
                <ul class="list-unstyled counter-one__list">
                    <li class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="600">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__text">Teammitglieder</p>
                        </div>
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="2">00</h3>
                                <span>k+</span>
                            </div>
                            <p class="counter-one__text">Service abgeschlossen</p>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="300ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="53">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__text">Gewinnerpreis</p>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="3">00</h3>
                                <span>k+</span>
                            </div>
                            <p class="counter-one__text">Kundenbewertung</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter One End -->

    <!--About One Start -->
    <section class="about-one mt-3" style="padding: 0;">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1 mx-5">
                <h2 class="section-title__title title-animation" style="color: #1e90ff;">Unsere Geschichte</h2>
                <p class="about-one__text-1 mt-3">Glasfix 24 wurde mit einer klaren Mission gegründet: Autoglas-Reparatur und Windschutzscheiben-Austausch einfacher, schneller und bequemer für Kunden zu machen. Unser Ziel ist es, Steinschlag-Reparaturen, den Austausch von Windschutzscheiben und die komplette Abwicklung mit der Versicherung so unkompliziert und effizient wie möglich zu gestalten.</p>
                <p class="about-one__text-1 mt-3">Wir haben festgestellt, dass viele Autobesitzer lange Wartezeiten in Werkstätten vermeiden wollen oder sich unsicher sind, ob eine Reparatur oder ein kompletter Austausch notwendig ist. Deshalb haben wir unseren mobilen Autoglas-Service entwickelt – eine schnelle, flexible und professionelle Lösung, die den Kunden direkt vor Ort betreut.</p>
            </div>
        </div>
    </section>
    <!--About One End -->

    <!--About Five Start -->
    <section class="about-five" style="padding: 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-five__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Unsere Leistungen im Überblick</h2>
                        </div>
                        <p class="about-five__text-1">Jetzt anrufen, auf WhatsApp schreiben oder direkt online einen Termin
                            buchen!
                        </p>
                        <ul class="list-unstyled about-five__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-double-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Mobiler Autoglas-Service – wir kommen direkt zu dir!</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Windschutzscheiben-Austausch & Steinschlagreparatur</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Komplette Schadensabwicklung mit deiner Versicherung</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>25 Jahre Garantie auf die Dichtheit deiner neuen Scheibe</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Kostenloses Angebot in wenigen Minuten </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-five__right">
                        <div class="about-five__img-box">
                            <div class="about-five__img">
                                <img src="{{ asset('assets/images/resources/about-img-1.webp') }}" alt="{{ env('APP_NAME') }}">
                            </div>
                            <div class="about-five__shope-box">
                                <div class="about-five__shope-box-bg-shape" style="background-color: #1E90FF;">
                                </div>
                                <div class="about-five__shope-icon">
                                    <span class="icon-auto-machanic-shop"></span>
                                </div>
                                <h3 class="about-five__shope-title">Autoglasreparatur</h3>
                                <p class="about-five__shope-text">Ein zuverlässiger Service für klare Sicht und
                                        Sicherheit – wir kümmern uns um Ihre Autoscheiben professionell und schnell.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Five End -->

    <!--How it works One Start-->
    <section class="services-one">
        <div class="services-one__inner">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Vorteile</span>
                    </div>
                    <h2 class="section-title__title title-animation">Warum Glasfix 24? Ihre Vorteile auf einen Blick</h2>
                </div>

                <div class="row">
                    <!-- 1 -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-broken-car"></span>
                                <div class="services-one__icon-shape-1"></div>
                                <div class="services-one__icon-shape-2"></div>
                            </div>
                            <h3 class="services-one__title"><a href="javascript:void(0);">Schneller Service</a></h3>
                            <p class="services-one__text">In nur 60–90 Minuten ist deine neue Scheibe verbaut!</p>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-brake-disc"></span>
                                <div class="services-one__icon-shape-1"></div>
                                <div class="services-one__icon-shape-2"></div>
                            </div>
                            <h3 class="services-one__title"><a href="javascript:void(0);">Maximale Sicherheit</a></h3>
                            <p class="services-one__text">Kein Risiko bei der Fahrt zur Werkstatt – wir kommen zu dir.</p>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-chassis"></span>
                                <div class="services-one__icon-shape-1"></div>
                                <div class="services-one__icon-shape-2"></div>
                            </div>
                            <h3 class="services-one__title"><a href="javascript:void(0);">Keinen Ärger mit der
                                    Versicherung</a></h3>
                            <p class="services-one__text">Wir übernehmen die komplette Abwicklung für dich!</p>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-wheels"></span>
                                <div class="services-one__icon-shape-1"></div>
                                <div class="services-one__icon-shape-2"></div>
                            </div>
                            <h3 class="services-one__title"><a href="javascript:void(0);">Garantierte Qualität</a></h3>
                            <p class="services-one__text">25 Jahre Garantie auf die Dichtheit deiner neuen Scheibe.</p>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-pressure"></span>
                                <div class="services-one__icon-shape-1"></div>
                                <div class="services-one__icon-shape-2"></div>
                            </div>
                            <h3 class="services-one__title"><a href="javascript:void(0);">Immer flexibel</a></h3>
                            <p class="services-one__text">Zuhause, am Arbeitsplatz oder unterwegs – du entscheidest, wo wir
                                arbeiten!</p>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-piston"></span>
                                <div class="services-one__icon-shape-1"></div>
                                <div class="services-one__icon-shape-2"></div>
                            </div>
                            <h3 class="services-one__title"><a href="javascript:void(0);">Kundenservice rund um die
                                    Uhr</a></h3>
                            <p class="services-one__text">Unser freundliches Team steht dir jederzeit für Fragen und Hilfe
                                zur Verfügung.</p>
                        </div>
                    </div>

                    <div class="button-group mt-4 text-center">
                        <a style="width: auto;" href="{{ route('frontend.contact') }}" class="thm-btn mb-2">Jetzt Termin
                            vereinbaren und profitieren! <span class="icon-arrow-up-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--How it works One End -->

    <!--Services Two Start -->
    <section class="services-two services-five">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Unsere Werte</h2>
            </div>
            <div class="row">
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-gearshift"></span>
                        </div>
                        <h3 class="services-two__title"><a href="javascript:void(0);">Kundenzufriedenheit</a>
                        </h3>
                        <p class="services-two__text">Unsere Kunden stehen an erster Stelle. Wir bieten höchste Qualität und einen unkomplizierten Service. </p>
                    </div>
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-wheels"></span>
                        </div>
                        <h3 class="services-two__title"><a href="javascript:void(0);">Schnelligkeit</a></h3>
                        <p class="services-two__text">Wir setzen dein Auto schnell wieder instand, ohne Qualitätseinbußen.</p>
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-two__img">
                        <img src="{{ asset('assets/images/team/about-1.png') }}" alt="{{ env('APP_NAME') }}">
                    </div>
                </div>
                <!--Services Two Single End-->
                <!--Services Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-piston"></span>
                        </div>
                        <h3 class="services-two__title"><a href="javascript:void(0);">Fachkompetenz</a></h3>
                        <p class="services-two__text">Unser Team besteht aus erfahrenen Autoglas-Experten, die mit modernster Technik arbeiten. </p>
                    </div>
                    <div class="services-two__single">
                        <div class="services-two__icon">
                            <span class="icon-pressure"></span>
                        </div>
                        <h3 class="services-two__title"><a href="elite-auto-services.php">Garantie & Qualität</a></h3>
                        <p class="services-two__text"> Wir geben 25 Jahre Garantie auf die Dichtheit der neuen Windschutzscheibe. </p>
                    </div>
                </div>
                <!--Services Two Single End-->
            </div>
        </div>
    </section>
    <!--Services Two End -->
@endsection

@section('script')
@endsection
