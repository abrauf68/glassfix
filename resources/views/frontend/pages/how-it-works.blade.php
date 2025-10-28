@extends('frontend.layouts.master')

@section('title', 'So funktioniert’s')

@section('css')
@endsection

@section('content')
    <!--About One Start -->
    <section class="about-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1 mx-5">
                {{-- <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Service</span>
                </div> --}}
                <h2 class="section-title__title title-animation" style="color: #1e90ff;">Ablauf des Services bei Glasfix 24 –
                    Dein mobiler Autoglas-Spezialist</h2>
                <p class="about-one__text-1 mt-3">Eine kaputte Windschutzscheibe oder ein Steinschlag? Mit Glasfix 24 wird
                    die Reparatur oder der Austausch deiner Windschutzscheibe schnell, unkompliziert und professionell
                    erledigt! Unser mobiler Autoglas-Service ist speziell darauf ausgelegt, dir maximale Flexibilität und
                    Sicherheit</p>
            </div>
        </div>
    </section>
    <!--About One End -->

    <section class="how-it-works py-5">
        <div class="container">
            <div class="row justify-content-center g-4">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="step-card p-4 rounded-4 text-white h-100">
                        <div class="step-icon mb-3">
                            <span class="step-number">1</span>
                        </div>
                        <h5 class="fw-bold mb-3">Schaden melden – Dein erster Schritt zur sicheren Windschutzscheibe</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Rufe uns an oder nutze unser Online-Terminformular, um den Schaden zu melden.</li>
                            <li>Teile uns wichtige Informationen mit, wie z. B. das Fahrzeugmodell, das Baujahr und eine kurze Beschreibung des Schadens.</li>
                            <li>Wenn möglich, lade ein Foto des Schadens hoch, damit wir den Reparaturbedarf noch besser einschätzen können.</li>
                            <li>In weniger als 60 Sekunden erhältst du von uns ein kostenloses Angebot.</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="step-card p-4 rounded-4 text-white h-100">
                        <div class="step-icon mb-3">
                            <span class="step-number">2</span>
                        </div>
                        <h5 class="fw-bold mb-3">Terminvereinbarung – Wir kommen zu dir</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Wähle einen Termin und einen Ort, der für dich passt. Ob zu Hause, am Arbeitsplatz oder unterwegs – unser mobiler Autoglas-Service passt sich deinem Alltag an.</li>
                            <li>Wir bieten flexible Zeitfenster, um sicherzustellen, dass du deinen Alltag nicht unterbrechen musst.</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="step-card p-4 rounded-4 text-white h-100">
                        <div class="step-icon mb-3">
                            <span class="step-number">3</span>
                        </div>
                        <h5 class="fw-bold mb-3">Abwicklung mit der Versicherung – Kein Papierkram für dich</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Wir übernehmen die komplette Abwicklung mit deiner Autoversicherung.</li>
                            <li>Von der Schadenmeldung bis zur Abrechnung kümmern wir uns um alle bürokratischen Schritte, sodass du dich zurücklehnen kannst.</li>
                            <li>Egal, ob es sich um eine Steinschlag-Reparatur oder den Austausch der Windschutzscheibe handelt – wir sorgen für eine stressfreie Abwicklung.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-4 mt-3">
                <!-- Step 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="step-card p-4 rounded-4 text-white h-100">
                        <div class="step-icon mb-3">
                            <span class="step-number">4</span>
                        </div>
                        <h5 class="fw-bold mb-3">Reparatur oder Austausch – Schnell und zuverlässig</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Unser Experte kommt pünktlich zu dir und prüft den Schaden an der Windschutzscheibe.</li>
                            <li>Steinschlag-Reparatur: Kleinere Schäden, wie ein Steinschlag, werden in wenigen Minuten mit modernster Technik repariert – schnell und sicher.</li>
                            <li>Windschutzscheiben-Austausch: Wenn ein Austausch notwendig ist, entfernen wir die beschädigte Scheibe und setzen eine neue hochwertige Windschutzscheibe ein. Der gesamte Prozess dauert in der Regel nur 60–90 Minuten.</li>
                            <li>Alle Arbeiten werden präzise und professionell durchgeführt, um maximale Sicherheit und Langlebigkeit zu gewährleisten.</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="step-card p-4 rounded-4 text-white h-100">
                        <div class="step-icon mb-3">
                            <span class="step-number">5</span>
                        </div>
                        <h5 class="fw-bold mb-3">Garantie und Qualität – Deine Sicherheit ist unser Ziel</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Nach Abschluss der Arbeiten erhältst du unsere 25-jährige Garantie auf die Dichtheit deiner neuen Scheibe.</li>
                            <li>Dank unserer hochwertigen Materialien und professionellen Arbeitstechniken kannst du sicher sein, dass dein Auto wieder in einwandfreiem Zustand ist.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Transparent background for full section */
        .how-it-works {
            background: transparent;
        }

        /* Step card with gradient blue background */
        .step-card {
            background: linear-gradient(135deg, #004A8F 0%, #1E90FF 100%);
            border: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        /* Step number circle */
        .step-icon {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            background: #004A8F;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Step title and list styling */
        .step-card h5 {
            color: #fff;
            font-size: 1.25rem;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 8px;
        }

        .step-card ul li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .step-card ul li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #fff;
            opacity: 0.8;
        }

        /* Responsive layout tweaks */
        @media (max-width: 767px) {
            .step-card {
                padding: 1.5rem;
            }

            .step-number {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
        }
    </style>

@endsection

@section('script')
@endsection
