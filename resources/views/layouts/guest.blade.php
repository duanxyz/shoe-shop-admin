<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body>
    <main>
        <section class="relative w-full h-full py-40 min-h-screen">
            <div class="absolute top-0 w-full h-full bg-gray-900 bg-no-repeat bg-full"
                style="background-image: url('{{ asset('img/register_bg_2.png') }}');"></div>
            {{ $slot }}
        </section>
    </main>
</body>

</html>
