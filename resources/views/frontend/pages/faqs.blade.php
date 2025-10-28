@extends('frontend.layouts.master')

@section('title', 'FAQs')

@section('css')
@endsection

@section('content')
    <!--About One Start -->
    <section class="about-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1 mx-5">
                <h2 class="section-title__title title-animation" style="color: #1e90ff;">FAQs</h2>
                <p class="about-one__text-1 mt-3">Hier findest du die häufigsten Fragen rund um unseren Autoglas-Service – schnell und verständlich beantwortet.
        Solltest du dennoch weitere Fragen haben, steht unser Team dir gerne persönlich zur Verfügung.</p>
            </div>
        </div>
    </section>
    <!--About One End -->

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
                    <div class="accrodion active">
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
                    <div class="accrodion">
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
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Wie erkenne ich, ob eine Reparatur ausreicht oder ein Austausch notwendig ist?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Eine Steinschlag-Reparatur ist möglich, wenn:
                                    <ul>
                                        <li>Der Schaden kleiner als eine 2-Euro-Münze ist.</li>
                                        <li>Er sich außerhalb des Fahrersichtfelds befindet.</li>
                                        <li>Keine Risse oder größere Beschädigungen vorhanden sind.</li>
                                        <li>Er ca. 20 cm vom Rand der Windschutzscheibe entfernt ist. Falls der Steinschlag zu groß ist oder bereits Risse in der Windschutzscheibe entstanden sind, ist ein Austausch erforderlich, um deine Sicherheit zu gewährleisten.</li>
                                    </ul>
                                    <strong>Unser Tipp:</strong> Falls du dir unsicher bist, sende uns ein Foto deines Schadens – unsere Experten bewerten, ob eine Reparatur möglich ist!
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Welche Autoscheiben können repariert oder ausgetauscht werden?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Wir reparieren oder ersetzen alle Arten von Fahrzeugscheiben – von der Windschutzscheibe über die Seitenscheiben bis hin zur Heckscheibe. Unser Service gilt für PKWs, Transporter, LKWs, Wohnmobile und Busse.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Was kostet eine Steinschlag-Reparatur?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Bei vielen Teilkasko- oder Vollkaskoversicherungen ist die Steinschlag-Reparatur kostenlos – ohne Selbstbeteiligung. Falls du keine Versicherung hast, bieten wir dir faire Preise und eine transparente Kosteneinschätzung vorab.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Muss ich für die Reparatur in eine Werkstatt kommen?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Nein! Unser mobiler Autoglas-Service kommt zu dir – egal ob nach Hause, zur Arbeit oder an einen anderen Wunschort. Unser Team bringt alles mit, um den Austausch oder die Reparatur direkt vor Ort durchzuführen.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Welche Marken und Modelle werden unterstützt?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Wir bieten unseren Autoglas-Service für alle Automarken und Fahrzeugmodelle an – von gängigen Herstellern wie BMW, Mercedes, Audi, VW, Opel bis hin zu exotischen oder seltenen Fahrzeugen. Auch Oldtimer sind kein Problem!</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Wie kann ich einen Termin vereinbaren?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Ganz einfach! Du kannst uns online, per Telefon oder WhatsApp kontaktieren. Wir bieten kurzfristige Termine an, damit dein Fahrzeug schnell wieder einsatzbereit ist.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Kann ich meine Windschutzscheibe auch ohne Versicherung wechseln lassen?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Ja, du kannst den Austausch oder die Reparatur deiner Windschutzscheibe auch ohne Versicherung bei uns durchführen lassen. Wir bieten faire Preise und erstellen dir vorab ein unverbindliches Angebot – ohne versteckte Kosten!</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Wie lange hält eine Steinschlag-Reparatur?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Eine fachgerecht durchgeführte Steinschlag-Reparatur hält dauerhaft und verhindert in den meisten Fällen, dass sich der Schaden weiter ausbreitet. Dank unserer modernen Reparaturtechniken bleibt die Stabilität der Scheibe erhalten und die beschädigte Stelle ist oft kaum noch sichtbar.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Welche Zahlungsmethoden werden akzeptiert?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Bei Glasfix 24 kannst du bequem per EC-/Kreditkarte, PayPal, Barzahlung oder auf Rechnung zahlen. Falls du den Austausch über deine Versicherung abrechnen möchtest, übernehmen wir die komplette Abwicklung für dich.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Kann ich den Autoglas-Service auch am Wochenende nutzen?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Ja! Wir bieten flexible Termine, auch am Wochenende oder nach Feierabend. Unser mobiler Service kommt zu dir – egal ob zu Hause, auf der Arbeit oder unterwegs. So musst du dir keine Sorgen um deine Mobilität machen.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Gibt es eine Garantie auf die Reparatur oder den Austausch?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Ja, auf unsere Arbeiten geben wir eine Garantie! Sollte es nach der Reparatur oder dem Austausch wider Erwarten Probleme geben, kümmern wir uns schnell und unkompliziert darum – ohne zusätzliche Kosten für dich.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <div class="faq-one__accrodion-title-count"></div>
                            <h4>Wird bei der Reparatur oder dem Austausch eine Original-Windschutzscheibe verwendet?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Ja, wir verwenden ausschließlich hochwertige Windschutzscheiben in Erstausrüsterqualität (OEM-Qualität), die den gleichen Standards wie die Originalscheiben der Fahrzeughersteller entsprechen. Dadurch garantieren wir perfekte Passform, optimale Sicherheit und klare Sicht.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq One End -->

@endsection

@section('script')
@endsection
