@extends('frontend.layouts.master')

@section('title', 'Autoglasreparatur')

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
    <!-- Main Slider Start -->
    <section class="main-slider">
        <div class="main-slider__wrap">
            <div class="main-slider__carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="main-slider__shape-1">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="{{ env('APP_NAME') }}">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <h2 class="main-slider__title">Autoglasreparatur <br>& Austausch bei<br> dir <span>vor
                                    Ort!</span></h2>
                            {{-- <h2 class="main-slider__title">Where Quality is a <br> Service Meets the <br>
                                <span>Open
                                    Road</span>
                            </h2> --}}
                            <p class="main-slider__text">Mit unserem professionellen Service sorgen wir dafür, dass die
                                Autoglas- <br>Reparatur für unsere Kunden stressfrei, effizient und komfortabel abläuft</p>
                            <div class="main-slider__btn-and-video-box">
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('frontend.contact') }}" class="thm-btn">Kontakt<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                                <div class="main-slider__btn-box">
                                    <a href="tel:4915111660169" class="thm-btn">Jetzt anrufen<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                                {{-- <div class="main-slider__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="main-slider__video-icon">
                                            <span class="icon-video"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div> --}}
                            </div>
                            <div class="main-slider__img">
                                <img src="{{ asset('assets/images/resources/img-slider-1.webp') }}" alt="{{ env('APP_NAME') }}"
                                    class="float-bob-y">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider__shape-1">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="{{ env('APP_NAME') }}">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <h2 class="main-slider__title">Autoglasreparatur <br>& Austausch bei<br> dir <span>vor
                                    Ort!</span></h2>
                            <p class="main-slider__text">Mit unserem professionellen Service sorgen wir dafür, dass die
                                Autoglas- <br>Reparatur für unsere Kunden stressfrei, effizient und komfortabel abläuft</p>
                            <div class="main-slider__btn-and-video-box">
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('frontend.contact') }}" class="thm-btn">Kontakt<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                                <div class="main-slider__btn-box">
                                    <a href="tel:4915111660169" class="thm-btn">Jetzt anrufen<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                            <div class="main-slider__img">
                                <img src="{{ asset('assets/images/resources/img-slider-2.webp') }}" alt="{{ env('APP_NAME') }}"
                                    class="float-bob-y">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End -->

    <!--Counter One Start -->
    <section class="counter-one">
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
    <section class="about-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1 mx-5">
                {{-- <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Service</span>
                </div> --}}
                <h2 class="section-title__title title-animation" style="color: #1e90ff;">Schnell, zuverlässig &
                    professionell – Autoglas-Service bei dir vor Ort!</h2>
                <p class="about-one__text-1 mt-3">Eine beschädigte Windschutzscheibe ist nicht nur ärgerlich, sondern auch
                    ein echtes Sicherheitsrisiko. Mit Glasfix 24 musst du dir keine Sorgen machen – wir kommen direkt zu
                    dir! Egal ob zu Hause oder am Arbeitsplatz, wir reparieren oder ersetzen dein Autoglas in nur 60–90
                    Minuten – schnell, zuverlässig & professionell.</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">AboUt Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Unsere Leistungen im Überblick</h2>
                        </div>
                        <p class="about-one__text-1">Jetzt anrufen, auf WhatsApp schreiben oder direkt online einen Termin
                            buchen!</p>
                        <ul class="list-unstyled about-one__points">
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
                <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__right">
                        <div class="about-one__img-box">
                            <div class="about-one__img-shape-1 float-bob-y-2"></div>
                            <div class="about-one__img-shape-2 float-bob-x-2"></div>
                            <div class="about-one__img">
                                <img src="{{ asset('assets/images/resources/about-img-1.webp') }}" alt="{{ env('APP_NAME') }}">
                                <div class="about-one__content-box">
                                    <div class="about-one__content-icon">
                                        <span class="icon-auto-machanic-shop"></span>
                                    </div>
                                    <h4 class="about-one__content-title">Autoglasreparatur</h4>
                                    <p class="about-one__content-text">Ein zuverlässiger Service für klare Sicht und
                                        Sicherheit – wir kümmern uns um Ihre Autoscheiben professionell und schnell.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End -->

    <!--How it works One Start-->
    <section class="how-it-works-section py-5 position-relative overflow-hidden mt-5">
        <div class="container text-center position-relative z-2">
            <div class="section-header mb-5">
                <span class="badge bg-light text-primary px-3 py-2 fw-semibold mb-2">So funktioniert’s</span>
                <h2 class="fw-bold display-6 text-white">In 3 einfachen Schritten zu neuer Scheibe!</h2>
                <p class="text-light mt-2">Schnell, unkompliziert und professionell – so läuft’s bei uns.</p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-4">
                    <div class="how-card p-5 rounded-4 h-100">
                        <div class="icon-circle mb-4 mx-auto">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">1. Kontaktaufnahme</h5>
                        <p>Rufe uns an oder fülle das Online-Formular aus – in weniger als 60 Sekunden!</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-4">
                    <div class="how-card p-5 rounded-4 h-100">
                        <div class="icon-circle mb-4 mx-auto">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">2. Wir übernehmen den Papierkram</h5>
                        <p>Kein Stress mit der Versicherung – wir klären alles für dich.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-4">
                    <div class="how-card p-5 rounded-4 h-100">
                        <div class="icon-circle mb-4 mx-auto">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">3. Austausch oder Reparatur</h5>
                        <p>Unser Experte kommt zu dir und macht dein Auto in nur 60–90 Minuten wieder sicher!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* === Section Background === */
        .how-it-works-section {
            background: linear-gradient(135deg, #004A8F 0%, #1E90FF 100%);
            position: relative;
            z-index: 1;
        }

        /* === Section Header === */
        .section-header h2 {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .section-header p {
            font-size: 1.05rem;
        }

        /* === Step Cards === */
        .how-card {
            background: #fff;
            color: #555;
            border: none;
            transition: all 0.4s ease;
            position: relative;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .how-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 74, 143, 0.25);
        }

        /* === Icon Circle === */
        .icon-circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1E90FF, #004A8F);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 0 25px rgba(30, 144, 255, 0.6);
            transition: all 0.4s ease;
        }

        .how-card:hover .icon-circle {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 0 35px rgba(30, 144, 255, 0.9);
        }

        /* === Responsive === */
        @media (max-width: 767px) {
            .how-card {
                padding: 2rem;
            }

            .icon-circle {
                width: 70px;
                height: 70px;
                font-size: 1.5rem;
            }
        }
    </style>

    <!--How it works One End -->

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

    <!--Faq One Start -->
    <section class="faq-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">FAQs</span>
                </div>
                <h2 class="section-title__title title-animation">Häufig gestellte Fragen & Antworten</h2>
            </div>
            <div class="faq-one__inner-content">
                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Wie lange dauert der Austausch der Windschutzscheibe?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>In der Regel dauert der Austausch 60–90 Minuten. Unsere Autoglas-Experten sorgen dafür,
                                    dass dein Fahrzeug schnell wieder einsatzbereit ist.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Übernimmt meine Versicherung die Kosten für den Windschutzscheiben-Austausch?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Viele Teilkasko- und Vollkaskoversicherungen decken die Kosten für einen
                                    Windschutzscheiben-Austausch oder eine Steinschlag-Reparatur vollständig ab. Wir
                                    übernehmen die komplette Abwicklung mit der Versicherung, sodass du dich um nichts
                                    kümmern musst.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Kann ich nach der Reparatur sofort wieder fahren?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Ja, nach einer Steinschlag-Reparatur kannst du direkt weiterfahren. Beim Austausch der
                                    Windschutzscheibe empfehlen wir eine Trocknungszeit von ca. 1 Stunde, damit der Kleber
                                    optimal aushärten kann.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Was passiert, wenn es während der Reparatur regnet?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Unsere Techniker sind mit mobilen Werkstattsystemen ausgestattet, die es uns ermöglichen,
                                    auch bei Regen einen professionellen Windschutzscheiben-Service durchzuführen.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq One End -->

    <!--Testimonial One Start -->
    <section class="testimonial-one">
        <div class="testimonial-one__wrap">
            <div class="container">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">ZEUGNIS</span>
                    </div>
                    <h2 class="section-title__title title-animation">Kundenbewertungen – Was unsere Kunden sagen</h2>
                </div>
                <div class="testimonial-one__carousel owl-theme owl-carousel">
                    <!--Testimonial One Single Start -->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                {{-- <img src="{{ asset('assets/images/testimonial/img-1.png') }}" alt="{{ env('APP_NAME') }}"> --}}
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                    style="width: 100px; height: 100px; background-color: #17a2b8; color: #fff; font-size: 50px; font-weight: 600;">
                                    M
                                </div>
                            </div>
                            <div class="testimonial-one__client-info">
                                <h3 class="testimonial-one__client-name"><a href="javascript:void(0);">Monique</a></h3>
                                <p class="testimonial-one__client-text">2025-05-09</p>
                            </div>
                            <p class="testimonial-one__text">Es wurde super schnell repariert und sehr Freundliche
                                Menschen. Gerne wieder wen was kaputt gegangen ist.</p>
                            <div class="testimonial-one__quote">
                                <span class="fas fa-quote-right"></span>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End -->
                    <!--Testimonial One Single Start -->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                {{-- <img src="{{ asset('assets/images/testimonial/img-2.png') }}" alt="{{ env('APP_NAME') }}"> --}}
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                    style="width: 100px; height: 100px; background-color: #6f42c1; color: #fff; font-size: 50px; font-weight: 600;">
                                    J
                                </div>
                            </div>
                            <div class="testimonial-one__client-info">
                                <h3 class="testimonial-one__client-name"><a href="javascript:void(0);">Julia Roth</a></h3>
                                <p class="testimonial-one__client-text">2025-03-26</p>
                            </div>
                            <p class="testimonial-one__text">Super Service und sehr nettes Team. Es hat alles reibungslos
                                geklappt und ich bin mit dem Ergebnis sehr zufrieden.</p>
                            <div class="testimonial-one__quote">
                                <span class="fas fa-quote-right"></span>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End -->
                    <!--Testimonial One Single Start -->
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                {{-- <img src="{{ asset('assets/images/testimonial/img-3.png') }}" alt="{{ env('APP_NAME') }}"> --}}
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                    style="width: 100px; height: 100px; background-color: #e83e8c; color: #fff; font-size: 50px; font-weight: 600;">
                                    G
                                </div>
                            </div>
                            <div class="testimonial-one__client-info">
                                <h3 class="testimonial-one__client-name"><a href="testimonials.php">Gisela Pawlitschek</a>
                                </h3>
                                <p class="testimonial-one__client-text">2025-06-03</p>
                            </div>
                            <p class="testimonial-one__text">Sie waren gestern bei mir ich kann nur sagen so was
                                vonfreundlich und zuvorkommend CHAPEAU Ach kamen sie pünktlich und es wurde vor Ort gemacht
                                Super Ich kann sie nur empfehlen</p>
                            <div class="testimonial-one__quote">
                                <span class="fas fa-quote-right"></span>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial One Single End -->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End -->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="container">
            <div class="contact-three__inner">
                <h3 class="contact-three__title">Jetzt Kontakt aufnehmen!</h3>

                <form class="contact-three__form" method="POST" action="{{ route('frontend.contact.submit') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- Name --}}
                        <div class="col-xl-6 col-lg-6 mb-3">
                            <div class="contact-three__input-box">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"
                                    required>
                                @error('name')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="col-xl-6 col-lg-6 mb-3">
                            <div class="contact-three__input-box">
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    placeholder="Telefonnummer" required>
                                @error('phone')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Message --}}
                        <div class="col-xl-12 mb-3">
                            <div class="contact-three__input-box text-message-box">
                                <textarea name="message" placeholder="Kurze Schadensbeschreibung..">{{ old('message') }}</textarea>
                                @error('message')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Fahrzeugschein --}}
                        <div class="col-xl-6 col-lg-6 mb-3">
                            <div class="contact-three__input-box">
                                <label for="document" class="fw-semibold">Fahrzeugschein (falls vorhanden)</label>
                                <input type="file" name="document" id="document">
                                @error('document')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Fotos des Schadens --}}
                        <div class="col-xl-6 col-lg-6 mb-3">
                            <div class="contact-three__input-box">
                                <label for="damage_images" class="fw-semibold">Fotos des Schadens (falls möglich)</label>
                                <input type="file" name="damage_images[]" id="damage_images" multiple>
                                @error('damage_images')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="col-xl-12">
                            <div class="contact-three__btn-box">
                                <button type="submit" class="thm-btn">
                                    Einreichen <span class="icon-arrow-up-right"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="result"></div>
            </div>
        </div>
    </section>

    <!--Contact Three End-->
@endsection

@section('script')
@endsection
