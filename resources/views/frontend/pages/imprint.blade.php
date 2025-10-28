@extends('frontend.layouts.master')

@section('title', 'Impressum')

@section('css')
@endsection

@section('content')
    <section class="impressum-section py-5" style="background: transparent;">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold" style="color:#1E90FF;">Impressum</h2>
                <p class="text-muted mt-2">Angaben gemäß § 5 TMG</p>
            </div>

            <div class="card border-0 shadow-sm p-4 mx-auto"
                style="max-width: 700px; background-color: rgba(30,144,255,0.05); border-radius: 15px;">
                <div class="text-center">
                    <h4 class="fw-bold mb-3 text-primary">Glasfix24</h4>
                    <p class="mb-1">Inhaber: <strong>Hafiz Shala</strong></p>
                    <p class="mb-1">📍 Neckarstraße 1<br>71083 Herrenberg</p>
                    <p class="mb-1">📞 Tel.: <a href="tel:+4915111660169" class="text-decoration-none text-dark">+49 151
                            11660169</a></p>
                    <p class="mb-1">📧 E-Mail: <a href="mailto:info@glasfix24.de"
                            class="text-decoration-none text-dark">info@glasfix24.de</a></p>
                    <p class="mb-0">🌐 Webseite: <a href="https://www.glasfix24.de"
                            class="text-decoration-none text-dark">www.glasfix24.de</a></p>
                </div>
            </div>

            <div class="text-center mt-4">
                <small class="text-muted">© <span id="year"></span> Glasfix24 – Alle Rechte vorbehalten.</small>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        // Auto-update year
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
@endsection
