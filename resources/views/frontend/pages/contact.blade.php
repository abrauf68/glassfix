@extends('frontend.layouts.master')

@section('title', 'Kontakt')

@section('css')
@endsection

@section('content')
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
                                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Telefonnummer"
                                    required>
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

    <!--Contact Four Start-->
    <section class="contact-four">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-xl-6">
                    <div class="contact-four__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Kontakt</span>
                            </div>
                            <h2 class="section-title__title title-animation">
                                Schneller & Zuverlässiger Autoglas-Service<br>
                                Ihre Scheibe in besten Händen
                            </h2>
                        </div>
                        <p class="contact-four__text">
                            Egal ob Steinschlag oder kompletter Scheibentausch – unser erfahrenes Team kümmert sich schnell,
                            professionell und unkompliziert um Ihr Fahrzeug. Wir übernehmen auch die Abwicklung mit Ihrer
                            Versicherung.
                        </p>

                        <ul class="contact-four__contact-list list-unstyled">
                            <li>
                                <div class="contact-four__contact-title-box">
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <p>Adresse</p>
                                </div>
                                <h5>Neckarstraße 1, 71083 Herrenberg, Deutschland</h5>
                            </li>
                            <li>
                                <div class="contact-four__contact-title-box">
                                    <div class="icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <p>Telefonnummer</p>
                                </div>
                                <h5><a href="tel:+4915111660169">+49 151 11660169</a></h5>
                            </li>
                            <li>
                                <div class="contact-four__contact-title-box">
                                    <div class="icon">
                                        <span class="icon-mail"></span>
                                    </div>
                                    <p>E-Mail</p>
                                </div>
                                <h5><a href="mailto:info@glasfix24.de">info@glasfix24.de</a></h5>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-xl-6">
                    <div class="contact-four__right">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.363416057515!2d8.87032777654794!3d48.59324942211629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479740c2262b52a5%3A0x6e312c9a06b640a!2sNeckarstra%C3%9Fe%201%2C%2071083%20Herrenberg%2C%20Germany!5e0!3m2!1sen!2sde!4v1730123456789!5m2!1sen!2sde"
                            class="google-map__two" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Four End-->
@endsection

@section('script')
@endsection
