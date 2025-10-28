@extends('frontend.layouts.master')

@section('title', 'Allgemeine Geschäftsbedingungen (AGB)')

@section('css')
@endsection

@section('content')
    <section class="terms-section py-5" style="background: transparent;">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold" style="color:#1E90FF;">Allgemeine Geschäftsbedingungen (AGB)</h2>
                <p class="text-muted mt-2">von Glasfix24</p>
            </div>

            <div class="card border-0 shadow-sm p-4" style="background-color: rgba(30,144,255,0.05); border-radius: 15px;">
                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Geltungsbereich</h4>
                    <p>Diese Allgemeinen Geschäftsbedingungen (AGB) gelten für alle Verträge, Lieferungen und Leistungen
                        zwischen <strong>Glasfix24</strong>, Neckarstraße 1, 71083 Herrenberg, vertreten durch
                        Geschäftsinhaber <strong>Hafiz Shala</strong> (nachfolgend “Anbieter” genannt) und seinen Kunden.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Leistungen</h4>
                    <ul>
                        <li>Der Anbieter führt Autoglas-Reparaturen und den Austausch von Fahrzeugscheiben für alle
                            Fahrzeugmodelle durch.</li>
                        <li>Die Reparatur von Steinschlägen erfolgt nach Herstellervorgaben. Eine vollständige
                            Unsichtbarkeit der reparierten Stelle kann nicht garantiert werden.</li>
                        <li>Ein Austausch der Windschutzscheibe erfolgt, wenn eine Reparatur technisch oder
                            sicherheitstechnisch nicht möglich ist.</li>
                        <li>Der Anbieter behält sich das Recht vor, einen Auftrag abzulehnen, wenn eine Reparatur nicht
                            durchführbar oder wirtschaftlich nicht sinnvoll ist.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Terminvereinbarung, Stornierung & Nichtwahrnehmung</h4>
                    <ul>
                        <li>Termine können telefonisch, per E-Mail oder über die Webseite vereinbart werden.</li>
                        <li>Eine kostenfreie Stornierung ist bis 24 Stunden vor dem Termin möglich. Bei späterer Absage kann
                            eine Ausfallgebühr in Höhe von <strong>50 €</strong> berechnet werden.</li>
                        <li>Falls der Kunde den vereinbarten Termin nicht wahrnimmt und keine rechtzeitige Stornierung
                            erfolgt, kann eine Pauschale von <strong>80 €</strong> für den entstandenen Aufwand berechnet
                            werden.</li>
                        <li>Bei mobilem Service muss der Kunde sicherstellen, dass der Terminort für die Arbeiten geeignet
                            ist (z. B. trockener, windgeschützter Platz).</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Preise und Zahlung</h4>
                    <ul>
                        <li>Alle Preise verstehen sich inklusive der jeweils gültigen gesetzlichen Mehrwertsteuer.</li>
                        <li>Die Zahlung erfolgt sofort nach Durchführung der Leistung in bar, per EC-/Kreditkarte oder nach
                            vorheriger Absprache auf Rechnung.</li>
                        <li>Rechnungen sind innerhalb von <strong>7 Tagen</strong> ab Rechnungsdatum ohne Abzüge zu
                            begleichen.</li>
                        <li>Bei verspäteter Zahlung fallen Mahngebühren und Verzugszinsen in Höhe von <strong>5 % über dem
                                Basiszinssatz</strong> an.</li>
                        <li>Der Anbieter behält sich das Recht vor, eine Anzahlung oder vollständige Vorauszahlung zu
                            verlangen.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Versicherung & Haftung des Kunden</h4>
                    <ul>
                        <li>Falls eine Teil- oder Vollkaskoversicherung besteht, kann die Abrechnung direkt mit der
                            Versicherung erfolgen.</li>
                        <li>Der Kunde bleibt in jedem Fall der Vertragspartner und haftet für Kosten, die von der
                            Versicherung nicht übernommen werden.</li>
                        <li>Ist der Kunde für einen Schaden an seiner Scheibe selbst verantwortlich (z. B. durch
                            unsachgemäße Nutzung nach der Reparatur), übernimmt der Anbieter keine Haftung.</li>
                        <li>Der Kunde verpflichtet sich, vor Auftragserteilung den Versicherungsumfang zu klären und alle
                            notwendigen Dokumente bereitzustellen.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Gewährleistung & Haftung des Anbieters</h4>
                    <ul>
                        <li>Für den Austausch von Fahrzeugscheiben gilt die gesetzliche Gewährleistung von <strong>zwei
                                Jahren</strong> auf Material und Montage.</li>
                        <li>Steinschlagreparaturen sind eine präventive Maßnahme. Eine vollständige Wiederherstellung der
                            Optik kann nicht garantiert werden.</li>
                        <li>Der Anbieter haftet nicht für bereits bestehende Schäden am Fahrzeug oder daraus resultierende
                            Folgeschäden.</li>
                        <li>Der Anbieter übernimmt keine Haftung für Schäden, die durch Umwelteinflüsse oder unsachgemäße
                            Pflege nach der Reparatur entstehen.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Haftungsausschluss</h4>
                    <ul>
                        <li>Der Anbieter haftet nicht für indirekte Schäden, entgangene Gewinne oder sonstige Folgeschäden.
                        </li>
                        <li>Für Verzögerungen durch höhere Gewalt (z. B. Unwetter, Lieferprobleme, Krankheit) übernimmt der
                            Anbieter keine Haftung.</li>
                        <li>Falls sich während der Reparatur herausstellt, dass eine versteckte Vorschädigung vorliegt, kann
                            die Reparatur oder der Austausch abgebrochen oder ein Aufpreis verlangt werden.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Datenschutz</h4>
                    <p>Der Anbieter erhebt, speichert und verarbeitet personenbezogene Daten des Kunden ausschließlich zur
                        Auftragsabwicklung. Eine Weitergabe an Dritte erfolgt nur im Rahmen der Versicherungsabwicklung oder
                        gesetzlicher Vorgaben.</p>
                    <p>Weitere Informationen sind in der Datenschutzerklärung auf der Webseite einsehbar.</p>
                </div>

                <div>
                    <h4 class="fw-bold text-primary">Gerichtsstand & Schlussbestimmungen</h4>
                    <ul>
                        <li>Es gilt das Recht der Bundesrepublik Deutschland.</li>
                        <li>Gerichtsstand für alle Streitigkeiten ist <strong>Herrenberg</strong>, sofern der Kunde ein
                            Kaufmann oder eine juristische Person ist.</li>
                        <li>Sollten einzelne Bestimmungen dieser AGB unwirksam sein, bleibt die Gültigkeit der übrigen
                            Bestimmungen unberührt.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
