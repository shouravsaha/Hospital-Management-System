
<!DOCTYPE html>
<html lang="en">
  <head>

    {{-- all css files are including css file --}}
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      {{-- including sidebar section --}}
      @include('admin.sidebar')


        <!-- partial:partials/_navbar.html -->

        {{-- including navbar section --}}
        @include('admin.navbar')

        {{-- including body section --}}
        @include('admin.body')


      <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->

    {{-- including all script file --}}
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
