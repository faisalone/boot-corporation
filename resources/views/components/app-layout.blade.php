<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'BOOT CORPORATION' }} | BOOT CORPORATION</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{ $head ?? '' }}
</head>

<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden">

    <x-navigation />

    {{ $slot }}

    <x-footer />

    <script src="{{ asset('js/script.js') }}"></script>
    {{ $scripts ?? '' }}
</body>

</html>
