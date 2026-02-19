<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $siteName = $site->company_name ?? 'BOOT CORPORATION';
        $pageTitle = $title ?? ($site->meta_title ?? $siteName);
        $metaDescription = $site->meta_description ?? ($site->company_tagline ?? '');
        $metaKeywords = $site->meta_keywords ?? '';

        $faviconUrl = !empty($site->favicon) ? img_url($site->favicon) : '';

        $ogImageUrl = !empty($site->site_preview) ? img_url($site->site_preview) : (!empty($site->og_image) ? img_url($site->og_image) : '');

        $twitterImageUrl = !empty($site->twitter_image)
            ? img_url($site->twitter_image)
            : $ogImageUrl;

        $ogType = $site->og_type ?? 'website';
        $twitterCard = $site->twitter_card ?? 'summary_large_image';
    @endphp

    <title>{{ $pageTitle }} | {{ $siteName }}</title>

    @if($metaDescription)
        <meta name="description" content="{{ $metaDescription }}">
        <meta property="og:description" content="{{ $metaDescription }}">
        <meta name="twitter:description" content="{{ $metaDescription }}">
    @endif

    @if($metaKeywords)
        <meta name="keywords" content="{{ $metaKeywords }}">
    @endif

    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">

    @if($ogImageUrl)
        <meta property="og:image" content="{{ $ogImageUrl }}">
    @endif

    <meta name="twitter:card" content="{{ $twitterCard }}">
    <meta name="twitter:title" content="{{ $pageTitle }}">

    @if($twitterImageUrl)
        <meta name="twitter:image" content="{{ $twitterImageUrl }}">
    @endif

    @if($faviconUrl)
        <link rel="icon" href="{{ $faviconUrl }}">
        <link rel="apple-touch-icon" href="{{ $faviconUrl }}">
    @endif

    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{ $head ?? '' }}
</head>

<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden">

    <x-navigation />

    {{ $slot }}

    <x-footer />

    @vite(['resources/js/app.js'])
    {{ $scripts ?? '' }}
</body>

</html>
