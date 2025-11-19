<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name', 'Laravel') }} - {{ Illuminate\Support\Facades\Route::currentRouteName() }}</title>

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="config('app.name', 'Laravel')">
<meta name="robots" content="index,follow">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:type" content="website">
<meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
<meta property="og:description" content="">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
<meta property="og:image" content="{{ asset('images/default-og-image.jpg') }}">
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="asset('images/default-og-image.jpg')">
<meta name="twitter:site" content="@Malevolent">

<link rel="manifest" href="{{ asset('site.webmanifest') }}">

<meta name="theme-color" content="#599bfa">
<meta name="application-name" content="{{ config('app.name', 'Laravel') }}">
<meta name="apple-mobile-web-app-title" content="{{ config('app.name', 'Laravel') }}">

<link rel="stylesheet" href="{{ asset('Malevolent/css/plugins/fontawesome.css') }}"/>
<link rel="stylesheet" href="{{ asset('Malevolent/css/animations.css') }}"/>
<link rel="stylesheet" href="{{ asset('Malevolent/css/default.css') }}"/>
<link rel="stylesheet" href="{{ asset('Malevolent/css/Malevolent.css') }}"/>

@livewireStyles
