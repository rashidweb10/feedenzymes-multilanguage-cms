<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="icon" href="{{ asset('assets/frontend/images/logo.png') }}">
    <title>Lumis Enzymes | Feed Enzymes</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/hover.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  </head>

<body>
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
    @yield('scripts')
</body>

</html>