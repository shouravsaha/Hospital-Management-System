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

    <div align="center" style="padding:70px">

        <table>
            <tr style="background-color: black">
                <th style="padding: 10px; font-size: 20px; color:white;">Doctor Name</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Date</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Message</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Status</th>
            </tr>
            @foreach ($appointment as $data)

            <tr style="background-color: black">
                <td style="padding: 10px; font-size: 20px; color:white;">{{ $data->doctor }}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{ $data->date }}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{ $data->message }}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{ $data->status }}</td>
            </tr>

            @endforeach
        </table>
    </div>


<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{ asset('frontend/assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('frontend/assets/js/theme.js')}}"></script>

</body>
</html>
