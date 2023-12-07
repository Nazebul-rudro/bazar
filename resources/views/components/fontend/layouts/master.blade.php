<!DOCTYPE html>
<html lang="en">

 <head>
    <title>{{ $title ?? 'Not Found' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets/fontend') }}/css/style.css">

  </head>
  <body>

  <div class="site-wrap">
    <x-fontend.layouts.partials.header/>

   {{ $slot }}

<x-fontend.layouts.partials.footer/>
  </div>

  <script src="{{ asset('assets/fontend') }}/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('assets/fontend') }}/js/jquery-ui.js"></script>
  <script src="{{ asset('assets/fontend') }}/js/popper.min.js"></script>
  <script src="{{ asset('assets/fontend') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets/fontend') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('assets/fontend') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('assets/fontend') }}/js/aos.js"></script>

  <script src="{{ asset('assets/fontend') }}/js/main.js"></script>

  </body>
</html>
