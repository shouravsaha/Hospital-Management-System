<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    {{-- including header section --}}
    @include('user.header')

    {{-- including banner section --}}
    @include('user.banner')

    {{-- including about us section --}}
    @include('user.aboutus')

    {{-- including doctors section --}}
    @include('user.doctors')

    {{-- including latest news section --}}
    @include('user.news')

    {{-- including appointment section --}}
    @include('user.apointment')

    {{-- including footer up banner section --}}
    @include('user.down-banner')

    {{-- including footer section --}}
    @include('user.footer')

<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{ asset('frontend/assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('frontend/assets/js/theme.js')}}"></script>

</body>
</html>
