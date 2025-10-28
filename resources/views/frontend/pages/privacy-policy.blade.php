@extends('frontend.layouts.master')

@section('title', 'Datenschutzbestimmungen')

@section('css')
@endsection

@section('content')
    <section class="privacy-policy-section py-5" style="background: transparent;">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold" style="color:#1E90FF;">Datenschutzbestimmungen</h2>
                <p class="text-muted mt-2">Stand: 18.02.2025</p>
            </div>

            <div class="card border-0 shadow-sm p-4" style="background-color: rgba(30,144,255,0.05); border-radius: 15px;">
                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Verantwortlicher</h4>
                    <p class="mb-1"><strong>Glasfix24</strong></p>
                    <p class="mb-1">Inhaber: Hafiz Shala</p>
                    <p class="mb-1">📍 Neckarstraße 1, 71083 Herrenberg</p>
                    <p class="mb-1">📞 Telefon: [Deine Telefonnummer]</p>
                    <p class="mb-1">📧 E-Mail: <a href="mailto:info@glasfix24.de"
                            class="text-decoration-none">info@glasfix24.de</a></p>
                    <p>🌍 Webseite: <a href="https://www.glasfix24.de" target="_blank"
                            class="text-decoration-none">www.glasfix24.de</a></p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Erhebung und Verarbeitung personenbezogener Daten</h4>
                    <p>Wir erheben und verarbeiten personenbezogene Daten nur, soweit dies zur Bereitstellung unserer
                        Dienstleistungen erforderlich ist.</p>

                    <h5 class="fw-semibold mt-3">2.1. Kontaktformular & E-Mail-Anfragen</h5>
                    <p>Wenn Sie uns über das Kontaktformular oder per E-Mail kontaktieren, werden folgende Daten
                        gespeichert:</p>
                    <ul>
                        <li>Name</li>
                        <li>E-Mail-Adresse</li>
                        <li>Telefonnummer</li>
                        <li>Nachricht</li>
                    </ul>
                    <p>Diese Daten dienen ausschließlich der Bearbeitung Ihrer Anfrage und werden nicht ohne Ihre Zustimmung
                        weitergegeben.</p>

                    <h5 class="fw-semibold mt-3">2.2. WhatsApp-Kommunikation</h5>
                    <p>Sie haben die Möglichkeit, uns über WhatsApp zu kontaktieren. Durch die Nutzung von WhatsApp erklären
                        Sie sich damit einverstanden, dass Ihre Daten im Rahmen der Kommunikation verarbeitet werden.</p>
                    <p>Weitere Informationen: <a href="https://www.whatsapp.com/legal/privacy-policy-eea" target="_blank"
                            class="text-decoration-none">WhatsApp Datenschutzrichtlinie</a>.</p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-semibold">2.3. Automatische Datenverarbeitung (Website-Nutzung)</h5>
                    <p>Beim Besuch unserer Webseite werden automatisch folgende Daten erfasst:</p>
                    <ul>
                        <li>IP-Adresse</li>
                        <li>Datum und Uhrzeit des Zugriffs</li>
                        <li>Browsertyp und -version</li>
                        <li>Verwendetes Betriebssystem</li>
                    </ul>
                    <p>Diese Daten dienen ausschließlich der technischen Optimierung unserer Webseite.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Nutzung von Cookies</h4>
                    <p>Unsere Website verwendet Cookies, um die Benutzerfreundlichkeit zu verbessern. Sie können Cookies in
                        den Browsereinstellungen deaktivieren. Weitere Informationen finden Sie in unserer
                        Cookie-Richtlinie.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Weitergabe von Daten an Dritte</h4>
                    <p>Wir geben personenbezogene Daten nicht ohne Ihre Zustimmung an Dritte weiter, außer wenn dies für die
                        Vertragserfüllung notwendig ist oder wir gesetzlich dazu verpflichtet sind.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Speicherdauer und Löschung</h4>
                    <p>Anfragen über das Kontaktformular oder WhatsApp werden spätestens nach 6 Monaten gelöscht, sofern
                        kein Vertragsverhältnis entsteht. Rechnungs- und Vertragsdaten werden gemäß gesetzlicher Vorgaben 10
                        Jahre aufbewahrt.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Ihre Rechte als betroffene Person</h4>
                    <ul>
                        <li>✅ Auskunft über Ihre gespeicherten Daten</li>
                        <li>✅ Berichtigung unrichtiger Daten</li>
                        <li>✅ Löschung Ihrer Daten, sofern keine gesetzliche Aufbewahrungspflicht besteht</li>
                        <li>✅ Einschränkung der Verarbeitung</li>
                        <li>✅ Datenübertragbarkeit</li>
                        <li>✅ Widerspruch gegen die Verarbeitung</li>
                    </ul>
                    <p>Hierzu können Sie uns unter <a href="mailto:info@glasfix24.de"
                            class="text-decoration-none">info@glasfix24.de</a> kontaktieren.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold text-primary">Datensicherheit</h4>
                    <p>Wir treffen technische und organisatorische Maßnahmen, um Ihre Daten vor unbefugtem Zugriff, Verlust
                        oder Manipulation zu schützen.</p>
                </div>

                <div>
                    <h4 class="fw-bold text-primary">Änderungen der Datenschutzbestimmungen</h4>
                    <p>Diese Datenschutzrichtlinie kann bei Bedarf aktualisiert werden. Die jeweils aktuelle Version finden
                        Sie auf unserer Webseite.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
