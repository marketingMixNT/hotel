<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Tatrzański Raj')</title>
    <meta name="description" content='@yield('description')'>
    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!--Favicons-->
    @include('partials.favicon')
    <!--Facebook Meta-->
    @include('partials.facebook_meta')

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>
    <!--NAVIGATION-->
    @include('shared.mobile_menu')
    @include('shared.navbar')

    <!--PRELOADER-->
    @include('shared.preloader')



    {{ $slot }}




    <!--FOOTER-->
    @include('shared.footer')
    @include('shared.mobile_buttons')
    <!--SCRIPTS-->
    <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script>



</body>

</html>
