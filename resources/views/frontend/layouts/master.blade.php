<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Feedenzymes</title>
    <link rel="icon" href="{{ asset('assets/frontend/images/logo.png') }}">
    <meta content="" name="description">
    <!-- Favicons -->

    <!-- Vendor CSS Files -->
    <!-- <link href="{{ asset('assets/frontend/css/style.scss') }}" rel="stylesheet"> -->
</head>

<body>
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
    @yield('scripts')
</body>

</html>