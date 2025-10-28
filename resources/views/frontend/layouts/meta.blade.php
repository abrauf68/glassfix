<meta charset="UTF-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="author" content="@yield('author')">
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo.webp') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.webp') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo.webp') }}" />
<link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
